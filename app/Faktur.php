<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    protected $fillable = 
    [
        'alamat', 'kodepos', 'jumlahbarang', 'user_id', 'kategori', 'namabarang', 'hargabarang'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function kategori()
    {
        return $this->belongsToMany(Category::class);
    }
}