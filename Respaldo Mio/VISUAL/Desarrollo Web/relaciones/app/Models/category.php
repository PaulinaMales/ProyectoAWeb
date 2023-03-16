<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    // RELACIÓN DE UNO A MUCHOS
    public function videos()
    {
    return $this->hasMany(Video::class);
    }

    // RELACIÓN DE UNO A MUCHOS categoria-post
        public function posts()
        {
        return $this->hasMany(Post::class);
        }

   
}
