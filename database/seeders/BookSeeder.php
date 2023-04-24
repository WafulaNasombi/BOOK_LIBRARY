<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    
        $author1 = Author::where('fname', 'J.K')->where('lname', 'Rowling')->firstOrFail();
        $author2 = Author::where('fname', 'Stephen')->where('lname', 'King')->firstOrFail();
        $author3 = Author::where('fname', 'Michelle')->where('lname', 'Green')->firstOrFail();
        $author4 = Author::where('fname', 'Sammy')->where('lname', 'White')->firstOrFail();
        $author5 = Author::where('fname', 'Auidrey')->where('lname', 'Atieno')->firstOrFail();
        $author6 = Author::where('fname', 'Sandra')->where('lname', 'Amani')->firstOrFail();
        $author7 = Author::where('fname', 'Juma')->where('lname', 'Jake')->firstOrFail();
        $author8 = Author::where('fname', 'Samuel')->where('lname', 'Blu')->firstOrFail();
        $author9 = Author::where('fname', 'Faith')->where('lname', 'Wafula')->firstOrFail();
        $author10 = Author::where('fname', 'Stacey')->where('lname', 'Monanka')->firstOrFail();

        Book::create([
            'title' => 'The Book of John',
            'author_id' => $author1->id
        ]);
        
        Book::create([
            'title' => 'Gatzby Region',
            'author_id' => $author2->id
        ]);

        Book::create([
            'title' => 'Study of Insects',
            'author_id' => $author3->id
        ]);
        
        Book::create([
            'title' => 'Development of Trade',
            'author_id' => $author4->id
        ]);

        Book::create([
            'title' => 'Science of Engineering',
            'author_id' => $author5->id
        ]);
        
        Book::create([
            'title' => 'The Book of Sandra',
            'author_id' => $author6->id
        ]);

        Book::create([
            'title' => 'Out in the Woods',
            'author_id' => $author7->id
        ]);
        
        Book::create([
            'title' => 'Urbanization',
            'author_id' => $author8->id
        ]);

        Book::create([
            'title' => 'Human Rights',
            'author_id' => $author9->id
        ]);
        
        Book::create([
            'title' => 'How to Read Effectively',
            'author_id' => $author10->id
        ]);
    }
}
