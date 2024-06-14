<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $table = 'freelancers';
    protected $primaryKey = 'id_freelancer'; // Sesuaikan dengan nama kolom ID yang digunakan dalam tabel

    protected $fillable = [
        'nama', 'spesialisasi', 'lokasi', 'rating', 'kontak',
    ];
}
