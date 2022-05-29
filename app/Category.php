<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function barang()
    {
        return $this->belongsToMany(Book::class);
    }

    public function fakturBarang()
    {
        return $this->belongsToMany(Faktur::class);
    }
}