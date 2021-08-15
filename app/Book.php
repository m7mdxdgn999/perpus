<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded=[''];
    protected $primaryKey='kode_buku';

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
