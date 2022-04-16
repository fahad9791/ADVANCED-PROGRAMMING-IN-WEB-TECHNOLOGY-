<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\order;

class customer extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function products(){

        return $this->hasMany(order::class, 'c_id');
    }
}
