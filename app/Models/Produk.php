<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Produk extends Model
{
    protected $guarded = ['id'];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}