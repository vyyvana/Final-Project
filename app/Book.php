<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = 
    [
        'nama', 'harga', 'jumlah', 'user_id', 'image'
    ];

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

}
