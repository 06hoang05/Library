<?php

namespace App\Http\Controllers;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
   
    public function index()
    {
        $books = book::latest()->paginate(5);
        return view('books.index',compact('books'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
   
    }

    
    public function create()
    {
        return view('books.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'book_authorid' => 'required',
            'book_title' => 'required',
            'book_isbn' => 'required',
            'book_pub_year' => 'required',
            'book_available' => 'required',
            
        ]);
        book::create($request->all());
        return redirect()->route('books.index')->with('success',
                                                                'Created Successfully.');
  
    }

    
    public function show(book $book)
    {
        return view('books.show',compact('book'));
    }

 
    public function edit(book $book)
    {
        return view('books.edit',compact('book'));
    }

    
    public function update(Request $request, book $book)
    {
        $request->validate([
            'book_authorid' => 'required',
            'book_title' => 'required',
            'book_isbn' => 'required',
            'book_pub_year' => 'required',
            'book_available' => 'required',
            
        ]);
        $book->update($request->all());
        return redirect()->route('books.index')->with('success',
                                                                'Created Successfully.');
  
   
    }

    
    public function destroy(book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success',
                        'Student deleted successfully.');
    }
}
