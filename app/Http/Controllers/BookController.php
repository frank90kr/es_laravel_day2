<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//inseriamo le funzioni dinamiche del sito

class BookController extends Controller
{
    public function index()
    {
        return view('book.index');
    }

    public function create()
    {
        return view('book.create');
    }

    public function show($id)
    {
        return view('books.show', [
            'id' => $id
        ]);
    }

    public function edit($id)
    {
        return view('books.edit', compact('id'));
    }
}
