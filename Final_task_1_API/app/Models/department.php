<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;

class department extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function course(){

        return $this->hasMany(course::class,'offered_by');
    }
}
