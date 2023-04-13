<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class Proses extends Model
{
    protected $table = "proses";
    use HasFactory,HasTimestamps;

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model){
            if(auth()->check()){
                $model->dibuat_oleh = auth()->user()->nama;
            }
        });
    }
}
