<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   
    protected $fillable = [
        'isbn',
        'title',
        'author_FirstName',
        'author_LastName',
        'author_id',
        'publication_date',
        
         
        ];
        
    
    
    public function authors()
    {
        return $this->belongsTo(Author::class, 'book_authors')->using(BookAuthor::class);
    }
}
