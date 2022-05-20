<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = 'books';
    protected $fillable = [
        'judul',
        'cover',
        'pengarang',
        'halaman',
        'terbit',
        'kategori_id'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Models\Category', 'kategori_id', 'id');
    }

}
