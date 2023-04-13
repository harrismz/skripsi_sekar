<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Support\Facades\Auth;

class Komponen extends Model
{
    protected $table = "komponen";
    use HasFactory,HasTimestamps;

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model){
            if($user = Auth::user()){
                $model->dibuat_oleh = $user->name;
                $model->diedit_oleh = "belum pernah edit";
            }
        });

        static::updating(function($model){
            if($user = Auth::user()){
                $model->diedit_oleh = $user->name;
            }
        });
    }

}
