<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('title', 'asc')->orderBy('id', 'desc')->get();

        return view('user.books.index')->with([
            'books' => $books,
        ]);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('user.books.show')->with([
            'book' => $book,
        ]);
    }
}
