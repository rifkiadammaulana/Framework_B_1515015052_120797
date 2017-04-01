<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
	public function jadwa_matakuliah(){
		return $this->hasMany(jadwa_matakuliah::class);
	}
    protected $table = 'ruangan';
    //protected $fillable = ['title'];
}