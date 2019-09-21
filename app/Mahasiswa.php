<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['user_id','nama_lengkap','nohp','semester','ipk','jenis_jurusan'];
}
