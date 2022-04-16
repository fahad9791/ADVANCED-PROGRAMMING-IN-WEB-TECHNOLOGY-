<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customer;
use App\Models\order;

class product extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function customers(){

        return $this->hasMany(order::class, 'p_id');
    }
}
