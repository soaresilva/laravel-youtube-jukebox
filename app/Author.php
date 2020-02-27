<?php

namespace App;

use App\Genre;
use App\Video;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
