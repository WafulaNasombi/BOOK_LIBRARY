<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
   
    public function index()
    {
        $book = Book::all();
        return view('books.index',['books'=>$book]);
    }

    public function show($id)
    {
        $book = Book::with ('author')->findOrFail($id);
        return view('books.show', ['book' => $book]);
    }

    public function store(Request $request)
    {
       
    $validatedData = $request->validate([
        'Title' => 'required|max:255',
        'isbn' => 'required|max:255',
        'published_date' => 'required|date',
        'AuthorsId' => 'required|integer',
    ]);

    
    $book = new Book;
    $book->Title = $validatedData['Title'];
    $book->isbn = $validatedData['isbn'];
    $book->published_date = $validatedData['published_date'];
    $book->AuthorsId = $validatedData['AuthorsId'];
    $book->save();


    return response()->json([
        'message' => 'Book created successfully',
        'book' => $book
    ], 201);

        
    }

    public function update( Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author_id' => 'required|exists:authors,id',
            'isbn' => 'required|unique:books,isbn,'.$book->id,
            'publication_date'=>'required',
            
        ]);

        $book->title = $validatedData['title'];
        $book->author_id = $validatedData['author_id'];
        $book->isbn = $validatedData['isbn'];
        $book->publication_date =$validatedData['publication_date'];
        $book->save();

        return response()->json(['message' => 'Book updated successfully']);
    }
    }

    
    

