<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorResource;


class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('<api>authors.index', ['authors' => $authors]) ;
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.show', ['author' => $author]);
    }   

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'id'=>'required'
        ]);

        $author = new Author;
        $author->fname = $validatedData['fname'];
        $author->lname = $validatedData['lname'];
        $author->id =$validatedData['id'];
        $author->save();

        return redirect()->route('authors.show', ['author' => $author->id])->with('success', 'Author created successfully!');

    
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'id' => 'required|unique:authors,id,'.$id.'|numeric',
        ],
          [
            'id.unique' => 'The ID must be unique.',
             'id.numeric' => 'The ID must be a number.',
          ]);
    
        // update author in database
        $author = Author::findOrFail($id);
        $author->fname = $request->input('fname');
        $author->lname = $request->input('lname');
        $author->id = $request->input('id');
        $author->save();
    
        return redirect('/authors')->with('success', 'Author updated successfully!');
    
    }
}