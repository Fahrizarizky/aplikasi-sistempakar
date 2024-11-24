<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Hasildiagnosa;
use App\Models\Kondisi;
use App\Models\Tingkatstres;
use App\Models\User;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Decimal;



use function Laravel\Prompts\alert;
use function Laravel\Prompts\text;

class diagnosaController extends Controller
{
   //cek apakah user sudah login
   public function konsultasi() {
      // if(!auth()->check()) {
      //    return redirect('/login');
      // } 

      return view('Konsultasi', [
         'Gejala' => Gejala::all()
      ]);
   }
   
   public function hasildiagnosa (Request $request) {
       $gejalaInput = $request->input('gejala');
       
       //Cek apakah user telah memilih gejala atau belum
       if(empty($gejalaInput)) {
         return redirect('/konsultasi')->with('warning', 'Harus pilih gejala dahulu !');
       }
       $cfTotal = [];
       $daftargejalas = [];


       foreach (Tingkatstres::all() as $tingkat) {
          $cf = $this->premisTunggal($gejalaInput, $tingkat->id);
          $cfTotal[$tingkat->nama_tingkatstres] = $this->premisKombinasi($cf);
         }

       arsort($cfTotal);
       $diagnosa = key($cfTotal);
       $hasildiagnosa = Tingkatstres::where('nama_tingkatstres', $diagnosa)->first()->nama_tingkatstres;

       foreach ($gejalaInput as $gejala => $value) {
          $daftargejalas[$gejala] = $this->daftargejalapasien($gejala);
       }


       $solusi = Tingkatstres::where('nama_tingkatstres', $hasildiagnosa)->first()->solusi_stres;
      
       $hasildiagnosa = Hasildiagnosa::create([
         'nama_siswa' => User::find(auth()->id())->nama,
         'gejaladialami_siswa' => implode(', ',$daftargejalas),
         'tingkatstres_siswa' => $hasildiagnosa,
         'persentase' => json_encode($cfTotal),
         'solusi' => $solusi,
         'nama_sekolah' => User::find(auth()->id())->nama_sekolah,
         'kelas' => User::find(auth()->id())->kelas,
         'jurusan' => User::find(auth()->id())->jurusan,
         'email' => User::find(auth()->id())->email
       ]);

       return view('Hasildiagnosa', [
         'hasildiagnosa' => $hasildiagnosa,
         'solusi' => explode(',', $hasildiagnosa->solusi),
         'gejala' => $daftargejalas
       ]);
   }

   function daftargejalapasien($id) {
      $hasil = Gejala::find($id)->nama_gejala;
      return $hasil;
  }

   //Perhitungan rumus premis tunggal
   function premisTunggal($gejalaInput, $tingkatStresId) {

      $cf = [];
      
      foreach ($gejalaInput as $gejalaId => $nilai) {
         $aturan = Aturan::where('gejala_id', $gejalaId)
                         ->where('tingkatstres_id', $tingkatStresId)
                         ->first();

         if ($aturan) {
            $cf[] = $aturan->bobot * $nilai;
         }
      }
      return $cf;
   }

   //Perhitungan rumus kombinasi
   function premisKombinasi($cf) {
      if (count($cf) == 0) {
         return 0;
      }

      $cfCombine = $cf[0];
      for ($i = 1; $i < count($cf); $i++) {
         $cfCombine = $cfCombine + $cf[$i] * (1 - $cfCombine);
      }

      return $cfCombine * 100;
   }
   
}