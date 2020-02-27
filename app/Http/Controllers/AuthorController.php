<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function create()
    {
        $author = new Author;
        // Adding this code up here makes it easier when creating the edit method.
        
        return view('admin.author.edit', compact('author'));
        // In case I forget: compact() creates an array containing the variable that's inside; it's the same as doing ['author' => $author]
    }
    
    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.author', compact('author'));
    }
    
    /** 
    * Stores a new Author object into the database.
     */
    public function store(Request $request)
    {
        $author = new Author; 
        $author->name = $request->input('name');
        $author->country = $request->input('country');
        // $author->genre_id = $request->input('genre_id');
        $author->save();
        // return $author;
        // return $request;
        return redirect('author/' . $author->id . '/edit');
    }
    
    
}
