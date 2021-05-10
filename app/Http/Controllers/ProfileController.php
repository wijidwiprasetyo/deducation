<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function daftarProfile(){
        return view('halaman', ['judul' => 'Daftar Mahasiswa']);
    }
    public function tabelProfile(){
        return view('halaman' , ['judul' => 'Tabel Mahasiswa']);
    }
    public function blogProfile(){
        return view('halaman', ['judul' => 'Blog Mahasiswa']);
    }
}
