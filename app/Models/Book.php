<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'price',
        'outline',
        'image',
    ];

    public static function orderByRequest() {
        return self::orderBy('title', 'asc')->orderBy('id', 'desc')->get();
    }
}
