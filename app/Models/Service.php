<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Produk;

class Service extends Model
{
    protected $guarded = ['id'];

    public function produk() {
        return $this->hasMany(Produk::class);
    }
}