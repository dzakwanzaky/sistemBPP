<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelBuku extends Model
{
    protected $table = "model_bukus";

    protected $fillable = [
        'judul' , 'penulis' , 'stok'
    ];
}
