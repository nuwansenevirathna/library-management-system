<?php

namespace App\Http\Controllers;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bookname' => 'required',
            'author' => 'required',
            'publisher' => 'required',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book)
    {
        $book->update($request->only(['number','bookname', 'author', 'publisher']));
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }
}
