<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;


class Checklist extends Model
{
    protected $table='checklist';
    use HasFactory,HasTimestamps;
}
