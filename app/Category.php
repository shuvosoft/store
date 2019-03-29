<?php

namespace App;
use App\Menu;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

}
