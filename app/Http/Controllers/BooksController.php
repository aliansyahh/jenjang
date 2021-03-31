<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Book::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:books,judul',
            'penulis' => 'required',
            'penerbit' => 'required'

        ]);

        Book::create([
            'judul' => $request->judul,
            'slug' => Str::of($request->judul)->slug('-'),
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit

        ]);

        return redirect(url('/Buku'))->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('buku.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('buku.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'judul' => 'required|unique:books,judul',
            'penulis' => 'required',
            'penerbit' => 'required'

        ]);

        Book::where(['id' => $book->id])
            ->update([
                'judul' => $request->judul,
                'slug' => Str::of($request->judul)->slug('-'),
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit

            ]);

        return redirect(url('/Buku'))->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect(url('/Buku'))->with('status', 'Data Berhasil Dihapus');
    }
}