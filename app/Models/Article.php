<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // protected $table = 'table_name'; --> hal ini digunakan untuk menyesuaikan nama table pada database jika namanya tidak sesuai default laravel

    // public $timestamps = false; --> jika kita tidak ingin menambahkan timestamps pada laravel

    protected $guarded = ['id'];
}
