<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('title', 'asc')->orderBy('id', 'desc')->get();

        return view('admin.books.index')->with([
            'books' => $books,
        ]);
    }

    public function create()
    {
        return view('admin.books.edit')->with([
            'book' => new Book(),
            'mode' => 'create'
        ]);
    }

    public function store(BookRequest $request)
    {
        $imagePath = $request->image->store('public/books_images');

        $params = $request->validated();

        $params['image'] = $imagePath;

        $book = Book::create($params);

        session()->flash('flash_message', '登録が完了しました');

        return redirect(route('admin.books.index'));
    }

    public function edit($id)
    {
        $book = Book::findOrfail($id);

        return view('admin.books.edit')->with([
            'book' => $book,
            'mode' => 'update'
        ]);
    }

    public function update(BookRequest $request, $id)
    {
        $book = Book::findOrfail($id);

        Storage::disk('local')->delete($book->image);

        $imagePath = $request->image->store('public/books_images');

        $params = $request->validated();

        $params['image'] = $imagePath;

        $book->update($params);

        session()->flash('flash_message', '更新が完了しました');
        return redirect(route('admin.books.index'));
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        Storage::disk('local')->delete($book->image);

        $book->delete();

        session()->flash('flash_message', '削除が完了しました');

        return redirect(route('admin.books.index'));
    }
}