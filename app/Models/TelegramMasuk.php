<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelegramMasuk extends Model
{
    protected $table = "telegram_masuk";
    protected $guarded = ['id'];

    use HasFactory;
}
