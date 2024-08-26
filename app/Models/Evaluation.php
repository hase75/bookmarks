<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'book_id',
        'evaluation',
        'word',
    ];

    public function books() {
		return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
