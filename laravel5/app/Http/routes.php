<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('mahasiswa_pengguna','MahasiswaController@mahasiswa');

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');


Route::get('dosen', 'dosenController@awal');
Route::get('dosen/tambah', 'dosenController@tambah');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');
Route::get('dosen/lihat/{dosen}','DosenController@lihat');

Route::get('mahasiswa', 'mahasiswaController@awal');
Route::get('mahasiswa/tambah', 'mahasiswaController@tambah');
Route::post('mahasiswa/simpan','mahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswaController@hapus');
Route::get('mahasiswa/lihat/{mahasiswa}','mahasiswaController@lihat');


Route::get('ruangan', 'ruangancontroller@awal');
Route::get('ruangan/tambah', 'ruangancontroller@tambah');
Route::get('ruangan/{ruangan}','ruangancontroller@lihat');
Route::post('ruangan/simpan','ruangancontroller@simpan');
Route::get('ruangan/edit/{ruangan}','ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}','ruangancontroller@update');
Route::get('ruangan/hapus/{ruangan}','ruangancontroller@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');


Route::get('matakuliah', 'matakuliahcontroller@awal');
Route::get('matakuliah/tambah', 'matakuliahcontroller@tambah');
Route::get('matakuliah/{matakuliah}','matakuliahcontroller@lihat');
Route::post('matakuliah/simpan','matakuliahcontroller@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahcontroller@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahcontroller@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahcontroller@hapus');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');


Route::get('Dosen_matakuliah', 'Dosen_matakuliahController@awal');
Route::get('Dosen_matakuliah/tambah', 'Dosen_matakuliahController@tambah');
Route::post('dosen_matakuliah/simpan','Dosen_MatakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','Dosen_MatakuliahController@hapus');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','Dosen_MatakuliahController@lihat');

Route::get('jadwa_matakuliah', 'jadwal_matakuliahController@awal');
Route::get('jadwa_matakuliah/tambah', 'jadwal_matakuliahController@tambah');
Route::post('jadwa_matakuliah/simpan','jadwal_matakuliahController@simpan');
Route::get('jadwa_matakuliah/edit/{jadwa_matakuliah}','jadwal_matakuliahController@edit');
Route::post('jadwa_matakuliah/edit/{jadwa_matakuliah}','jadwal_matakuliahController@update');
Route::get('jadwa_matakuliah/hapus/{jadwa_matakuliah}','jadwal_matakuliahController@hapus');
Route::get('jadwa_matakuliah/lihat/{jadwa_matakuliah}','jadwal_matakuliahController@lihat');

Route::get('relasi',function(){
	$mahasiswa = App\pengguna::find(1)->mahasiswa;
	return "$mahasiswa";
});

Route::get('relasi1',function(){
	$mahasiswa = App\pengguna::find(1)->mahasiswa;
	return "$mahasiswa";
});

Route::get('dosen_pengguna','dosenController@dosen');

