<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

//inseriamo le funzioni dinamiche del sito

class BookController extends Controller
{
    public function index()
    {
        // $books = Book::all();
        $books = Book::paginate(10); // default 15 per pagina
        // dd($books);
        return view('books.index', [
            'books' => $books,
        ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function show($id)
    {   
        $book = Book::findOrFail($id);
        return view('books.show', [
            'book' => $book
        ]);
    }

    public function edit($id)
    {
        return view('books.edit', compact('id'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // salvare i dati nel database
        $newBook = new Book();
        $newBook->title = $data['title'];
        $newBook->author = $data['author'];
        $newBook->price = $data['price'];
        $newBook->img = $data['img'];
        $newBook->save();

        // Book::insert

        // ridirezionare
        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        $book = Book::FindOrFail($id);
        $book->delete();

        return redirect()->route('books.index');
    }
}
