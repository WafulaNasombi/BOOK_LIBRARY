<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    
    protected $fillable=[
        'author_id',
        'fname',
        'lname',
        'book_list',
    ];
     
    
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
