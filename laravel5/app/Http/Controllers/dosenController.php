<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
    public function awal()
    {
    		return "Hello dari dosenController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->name = 'rifki adam maulana';
       	$dosen->nip = '1515015051';
       	$dosen->alamat = 'Jl.Samarinda';
       	$dosen->pengguna_id = 'A001';
       	$dosen->save();
       	return"data dengan username {$dosen->nama} telah disimpan";
    	
    }
}
    
