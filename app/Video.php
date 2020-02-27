<?php

namespace App;

use App\Genre;
use App\Author;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    
}
