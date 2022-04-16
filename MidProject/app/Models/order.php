<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\customer;

class order extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function product(){

        return $this->belongsTo(product::class, 'p_id');
    }

    public function customer(){

        return $this->belongsTo(customer::class, 'c_id');
    }
}
