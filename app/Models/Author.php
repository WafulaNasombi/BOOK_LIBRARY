<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    
    protected $primaryKey = 'id';
    
    protected $fillable=[
        'author_id',
        'FirstName',
        'LastName',
        
    ];
     
    
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
