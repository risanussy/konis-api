<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    protected $table = "peralatan_diluar";
    protected $guarded = ['id'];

    use HasFactory;
}
