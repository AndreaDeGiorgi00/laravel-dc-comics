<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_comics = Book::all();
       
        return view("book.index", compact('all_comics'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Book::findOrFail($id);
        return view('book.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
