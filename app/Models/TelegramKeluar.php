<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelegramKeluar extends Model
{
    protected $table = "telegram_keluar";
    protected $guarded = ['id'];

    use HasFactory;
}
