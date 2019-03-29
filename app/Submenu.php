<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
