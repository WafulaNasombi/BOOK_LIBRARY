<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', ['authors' => $authors]) ;
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.show', ['author' => $author]);
    }   

    public function store(Request $request)
    {
      $author = new Author;
      $author->FirstName = $request->input('FirstName');
      $author->LastName = $request->input('LastName');
      $author->id = $request->input('id');
      $author->save();

        return redirect()->route('authors.show', ['author' => $author->id])->with('success', 'Author created successfully!');

    
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'author_id' => 'required|unique:authors,id,'.$id.'|numeric',
        ],
          [
            'id.unique' => 'The ID must be unique.',
             'id.numeric' => 'The ID must be a number.',
          ]);
    
        // update author in database
        $author = Author::findOrFail($id);
        $author->FirstName = $request->input('FirstName');
        $author->LastName = $request->input('LastName');
        $author->id = $request->input('id');
        $author->save();
    
        return response()->json(['message' => 'Author updated successfully']);

    
    }
}
