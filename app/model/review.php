<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\product;

class review extends Model
{
    public function products(){
        return $this->belongsTo(product::class);
    }
}
