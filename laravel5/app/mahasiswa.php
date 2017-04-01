<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa'; //mendeklarasikan tabel mahasiswa
	public function pengguna()//fungsi dengan nama pengguna
	{
		return $this->belongsTo(Pengguna::class);//memberikan nilai return dari fungsi belongsTo yang merelasikan mahasiswa dengan pengguna
	}
	public function jadwa_matakuliah(){//fungsi dengan nama jadwal_matakuliah
		return $this->hasMany(jadwa_matakuliah::class);//memberika nilai return dari fungsi hasMany yang merelasikan mahasiswa dengan banyak jadwal_matakuliah
	}
}