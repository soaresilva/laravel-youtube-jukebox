<?php

namespace App;

use App\Video;
use App\Author;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    
    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }
    
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
