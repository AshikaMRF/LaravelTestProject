<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    //
    public  function index(){
        $books=Book::all();
        return view('books.index', compact('books'));
    }

    public  function create(){
      //  $books=Book::all();
        return view('books.create');
    }

    public  function show($id){
         $book=Book::findOrNew($id);

        return view('books.show',compact('book'));
    }

    public  function store(Requests\BookRequest $request){

         $books=Book::create($request->all());
        return redirect('books');
    }

    public  function edit($id){

        $book=Book::findOrNew($id);
        return view('books.edit',compact('book'));
    }
}
