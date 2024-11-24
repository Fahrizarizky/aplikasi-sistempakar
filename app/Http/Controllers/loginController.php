<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index() {
        return view('Home');
    }

    public function register() {
        return view('Register');
    }

    public function registerstore(Request $request) {
        $datarequest = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'nama_sekolah' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'password' => 'required|string|min:8'
        ]);
        User::create($datarequest);

        return redirect('/login')->with('sukses', 'anda berhasil registrasi!');
    }

    public function login() {
        return view('Login');
    }

    public function loginstore(Request $request) {
        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        //jika user sudah berhasil login akan langsung ke halaman konsultasi
        if(Auth::attempt($data)) {
             $request->session()->regenerate();

            //  return redirect('/konsultasi');
            return redirect('/');
        }

        return back()->with('gagal', 'anda gagal login !');
    }

    public function account($id) {
        $account = User::find($id);
        return view('Accountpage', [
            'account' => $account
        ]);
    }

    public function updateaccount(Request $request, $id) {
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

    public function logout(Request $request) {
        
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
