<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBook;
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('book' , ['books'=>Book::withCount('comments')->get()]) ; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBook $request)
    {
        // Validation
        $validated = $request->validated(); 
       
        $book = Book::make($validated);
        
        if ($request->hasFile('imgpath')) {
            $file = $request->file('imgpath');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move(public_path('/assets/uploads/products'), $filename);
            $imgPath = '/assets/uploads/products/' . $filename;
        } else {
            return back()->with('error', 'Image file is required');
        }
        $book->imgpath = $imgPath;
        $book->save();
        $request->session()->flash('status','the Book was added !');
        return redirect()->route('books.show' , ['book' => $book->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show' , ['book' => Book::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit' , ['book'=>Book::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBook $request, string $id)
    {
        $book = Book::findOrFail($id);
        $validated = $request->validated();
        $book->fill($validated);
        $book->save();
        $request->session()->flash('status','the Book was Updated !');
        return redirect()->route('books.show' , ['book' => $book->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete() ; 
        session()->flash('status' , 'the Book was Deleted !');
        return redirect()->route('books.index') ;
    }
}
