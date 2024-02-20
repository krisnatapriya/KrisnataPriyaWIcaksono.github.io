<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    function index()
    {
        return '<h1>Saya mahasiswa teknik Informatika</h1>';
    }
    function detail($nim, $nama)
    {
        return "<h1>Saya mahasiswa teknik Informatika dengan nim $nim & nama saya $nama</h1>";
    }
    
}
