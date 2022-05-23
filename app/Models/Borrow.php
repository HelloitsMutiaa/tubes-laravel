<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    public $table = 'borrows';
    protected $fillable = [
        'book_id',
        'user_id',
        'tgl_pinjam',
        'tgl_jtempo',
        'status'
    ];

    public function books(){
        return $this->belongsTo('App\Models\Book', 'book_id', 'id');
    }

    public function users(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
