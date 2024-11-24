<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Hasildiagnosa;
use App\Models\Tingkatstres;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboardindex() {
        return view('dashboard.Daftarkonsultasipage', [
            'Konsultasi' => Hasildiagnosa::all()
        ]);
    }
    public function daftarkonsultasiinfo($id) {
        $info = Hasildiagnosa::find($id);
        return view('dashboard.Daftarkonsultasiinfo', [
            'Info' => $info
        ]);
    }
    public function hapusdaftarkonsultasi($id) {
        Hasildiagnosa::find($id)->delete();
        return redirect('/dashboard');
    }
    public function daftarakun() {
        return view('dashboard.Daftarakunpage', [
            'Akun' => User::all()
        ]);
    }
    public function editdaftarakun($id) {
        $akun = User::find($id);
        return view('dashboard.Editdaftarakunpage', [
            'Akun' => $akun
        ]);
    }
    public function updatedaftarakun(Request $request, $id) {
        $olddata = User::find($id);
        $newdata = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'nama_sekolah' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'password' => 'required|string|min:8'
        ]);

        $olddata->update($newdata);
        return back()->with('sukses', 'account berhasil di update !');
    }


    // controller gejala
    public function gejalapage() {
        return view('dashboard.Gejalapage', [
            'Gejala' => Gejala::all()
        ]);
    }
    public function tambahgejala() {
        return view('dashboard.Tambahgejalapage');
    }
    public function storegejala(Request $request) {
        $validasi = $request->validate([
            'nama_gejala' => 'required',
            'kode_gejala' => 'required',
            'deskripsi' => 'required'
        ]);

        Gejala::create($validasi);
        return redirect('dashboard/gejalapage');
    }
    public function editgejala($id) {
        $gejala = Gejala::find($id);
        return view('dashboard.editgejalapage', [
            'gejala' => $gejala
        ]);
    }
    public function updategejala(Request $request, $id) {
        $gejala = Gejala::find($id);
        $gejala->update([
            'nama_gejala' => $request->nama_gejala,
            'kode_gejala' => $request->kode_gejala,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/dashboard/gejalapage');
    }
    public function deletegejala($id) {
        Gejala::find($id)->delete();
        return redirect('/dashboard/gejalapage');
    }


    // controller tingkat stres
    public function tingkatstrespage() {
        return view('dashboard.Tingkatstrespage', [
            'Tingkatstres' => Tingkatstres::all()
        ]);
    }
    public function tambahtingkatstres() {
        return view('dashboard.Tambahtingkatstrespage');
    }
    public function storetingkatstres(Request $request) {
        $validasi = $request->validate([
            'nama_tingkatstres' => 'required',
            'kode_tingkatstres' => 'required',
            'solusi_stres' => 'required'
        ]);

        Tingkatstres::create($validasi);
        return redirect('/dashboard/tingkatstrespage');
    }
    public function edittingkatstres($id) {
        $tingkat = Tingkatstres::find($id);
        return view('dashboard.Edittingkatstrespage', [
            'tingkat' => $tingkat
        ]);
    }
    public function updatetingkatstres(Request $request, $id) {
        $tingkat = Tingkatstres::find($id);
        $tingkat->nama_tingkatstres = $request->nama_tingkatstres;
        $tingkat->kode_tingkatstres = $request->kode_tingkatstres;
        $tingkat->solusi_stres = $request->solusi_stres;
        $tingkat->update();

        return redirect('/dashboard/tingkatstrespage');
    }
    public function hapustingkatstres($id) {
        Tingkatstres::find($id)->delete();
        return redirect('/dashboard/tingkatstrespage');
    }

    
    // controller aturan
    public function aturanpage() {
        return view('dashboard.Aturanpage', [
            'Aturan' => Aturan::all()
        ]);
    }
    public function tambahaturan() {
        return view('dashboard.Tambahaturanpage');
    }
    public function storeaturan(Request $request) {
        $validasi = $request->validate([
            'gejala_id' => 'required|integer',
            'tingkatstres_id' => 'required|integer',
            'bobot' => 'required|numeric|between:0,1.00'
        ]);

        Aturan::create($validasi);
        return redirect('/dashboard/aturanpage');
    }
    public function editaturan($id) {
        $aturan = Aturan::find($id);
        return view('dashboard.Editaturanpage', [
            'aturan' => $aturan
        ]);
    }
    public function updateaturan(Request $request, $id) {
        $oldaturan = Aturan::find($id);
        $newaturan = $request->validate([
            'gejala_id' => 'required|integer',
            'tingkatstres_id' => 'required|integer',
            'bobot' => 'required|numeric|between:0,1.00'
        ]);
        $oldaturan->gejala_id = $newaturan['gejala_id'];
        $oldaturan->tingkatstres_id = $newaturan['tingkatstres_id'];
        $oldaturan->bobot = $newaturan['bobot'];
        
        $oldaturan->update();

        return redirect('/dashboard/aturanpage');
    }
    public function hapusaturan($id) {
        Aturan::find($id)->delete();
        return redirect('/dashboard/aturanpage');
    }

    //daftar akun controller
    public function deletedaftarakun($id) {
        User::find($id)->delete();
        return back();
    }
}
