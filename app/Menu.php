<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
   public function categories(){
       return$this->hasMany(Category::class);
   }

    public function Authors()
    {
        return $this->hasMany(Author::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }


}
