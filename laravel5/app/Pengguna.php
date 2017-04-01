<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
 protected $table = 'pengguna'; //mendeklarasikan tabel pengguna
	 
	public function dosen() //fungsi dengan nama dosen
	{
		return $this->hasOne(dosen::class);//// memberikan nillai return dari fungsi hasMany yang merelasikan dosen
	}
	public function mahasiswa()//fungsi dengan nama mahasiswa
	{
		return $this->hasOne(mahasiswa::class);//memberikan nilai return dari fungsi hasOne yang merelasikan pengguna dengan mahasiswa
	}
	//public function Peran();{
		//return this->belongsToMany(Peran::class);}
}