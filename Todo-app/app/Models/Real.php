<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Real extends Model
{
    use HasFactory;

    protected $fillable = ['protain','real','calorie']; //保存したいカラム名が複数の場合
}
