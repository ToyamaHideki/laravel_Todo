<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideal extends Model
{
    use HasFactory;

    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $fillable = ['ideal'];
}
