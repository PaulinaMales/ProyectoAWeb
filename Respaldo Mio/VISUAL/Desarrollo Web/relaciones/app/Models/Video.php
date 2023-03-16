<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    // RELACIÓN DE UNO A MUCHOS
        public function user()
        {
        return $this->belongsTo(User::class);
        }
     // RELACIÓN DE UNO A MUCHOS VIDEO-CATEGORIA
        public function category()
        {
        return $this->belongsTo(Category::class);
        }
        // RELACIÓN DE UNO A MUCHOS POLIMÓRIFCA 
        public function comments()
        {
        return $this->morphMany(Comment::class,'commentable');
        }
         // RELACIÓN DE MUCHOS A MUCHOS POLIMÓRIFCA 
        public function tags()
        {
        return $this->morphToMany(Tag::class,'taggable');
        }
        

        }