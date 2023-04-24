<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   
    protected $fillable = [
        'isbn',
        'title',
        'author_fname',
        'author_lname'
         
        ];
        
    
    
    public function authors()
    {
        return $this->belongsTo(Author::class, 'book_authors')->using(BookAuthor::class);
    }
}
