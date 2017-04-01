<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
	public function dosen_matakuliah(){//fungsi dengan nama dosen_matakuliah
		return $this->hasMany(Dosen_matakuliah::class);// memberikan nillai return dari fungsi hasMany yang merelasikan matakuliah dengan banyak dosen_matakuliah
	}
    protected $table = 'matakuliah'; //mendeklarasikan tabel matakuliah
    //protected $fillable = ['title','keterangan'];
}

