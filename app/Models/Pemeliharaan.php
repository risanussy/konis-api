<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan extends Model
{
    protected $table = "pemeliharaan";
    protected $guarded = ['id'];

    use HasFactory;
}
