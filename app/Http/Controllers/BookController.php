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
        $book = Book::findOrFail($id);
        return view('bookid.show', ['book' => $book]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author_fname' => 'required',
            'author_lname'=>'required'
        ]);

        $book = new Book;
        $book->title = $validatedData['title'];
        $book->author_fname = $validatedData['author_fname'];
        $book->author_lname = $validatedData['author_lname'];
        $book->save();

        return redirect('/books');
        
    }

    public function update( Request $request, $id)
    {
        $book = Book::findOrFail($id);

        // Check if the book exists
        if (!$book) {
            return response()->json([
                'message' => 'Book not found'
            ], 404);
        }
    
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'author_id' => 'required|exists:authors,id',
            
        ]);
    
        // Return validation errors if any
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }
    
        // Update the book with the new data
        $book->title = $request->input('title');
        $book->author_id = $request->input('author_id');
        $book->save();
    
        // Return the updated book as JSON
        return response()->json([
            'message' => 'Book updated successfully',
            'data' => $book
        ], 200); 
    }

    
    
}
