<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kembali extends Model
{
    public $table = 'kembalis';
    protected $fillable = [
        'pinjam_id',
        'tgl_kembali',
        'denda',
        'status'
    ];

    public function borrows(){
        return $this->belongsTo('App\Models\Borrow', 'pinjam_id', 'id');
    }
}
