<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citas extends Model
{
    use HasFactory;

    static $rules=[
        'fechaCita' =>'required',
        'horaCita' =>'required',
        'mascotaCita' =>'required',

    ];

    protected $fillable=['fechaCita','horaCita','mascotaCita'];
}
