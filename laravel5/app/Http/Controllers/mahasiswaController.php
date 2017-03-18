<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswaController extends Controller
{
     public function awal()
    {
    		return "Hello dari mahasiswaController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'rifki adam maulana';
       	$mahasiswa->nim = '1515015052';
       	$mahasiswa->alamat = 'Jl.samarinda';
       	$mahasiswa->pengguna_id = 'A001';
       	$mahasiswa->save();
       	return"data dengan username {$mahasiswa->nama} telah disimpan";
    	
    }
}
