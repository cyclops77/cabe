<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';
    protected $fillable = ['user_id','nama_perusahaan','jenis_perusahaan','nama_penanggung','email_perusahaan','status'];

    public function beasiswa()
    {
    	return $this->hasMany(Beasiswa::class);
    }
}
