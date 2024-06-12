<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function Create()
    {
        return view('books.Create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required',
            'title' => 'required',
            'ISBN' => 'required',
            'editorial' => 'required',
            'pages' => 'required|integer',
        ]);

        Book::create($validatedData);
        return redirect('books/index')->with('success', 'Libro creado exitosamente');
    }

    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'code' => 'required',
            'title' => 'required',
            'ISBN' => 'required',
            'editorial' => 'required',
            'pages' => 'required|integer',
        ]);

        $book->update($validatedData);
        return redirect('books.index')->with('success', 'Libro actualizado exitosamente');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('books/index')->with('success', 'Libro eliminado exitosamente');
    }

    public function show(Book $book) {
        return view('books.show', compact('book'));
    }
}
