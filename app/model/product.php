<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\review;

class product extends Model
{
    public function reviews(){
        return $this->hasMany(review::class);
    }
}
