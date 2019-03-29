<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function images()
    {
        return $this->hasMany(BookImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
