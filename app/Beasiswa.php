<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $table = 'beasiswa';
    protected $fillable = ['perusahaan_id','nama_beasiswa','slug_beasiswa','ipk','point_ipk','gaji_ortu','point_gaji','usia','point_usia'];

    public function perusahaan()
    {
    	return $this->belongsTo(Perusahaan::class);
    }
}
