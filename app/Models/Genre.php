<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public function windows()
    {
        return $this->belongsToMany(Window::class, table:'window_genres',foreignPivotKey:'genre_id',relatedPivotKey:'window_id');
    }
}
