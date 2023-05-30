<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function user()
    {
        // https://readouble.com/laravel/8.x/ja/eloquent-relationships.html#one-to-many
        return $this->belongsTo(User::class);
    }
}
