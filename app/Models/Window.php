<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Window extends Model
{
    use HasFactory;


    protected $fillable = [
        'author_id',
        'title',
        'password',
        'description',
        'banner_filename',
        'actors',
        'rating',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, table:'window_genres',foreignPivotKey:'window_id',relatedPivotKey:'genre_id');
    }
}
