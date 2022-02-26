<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create()
    {
        return view('CRUD.create');
    }

    public function show(BookRequest $request)
    {
        // Query Builder
        // Elonguent
        Book::create(
            [
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'halaman' => $request->halaman,
                'tahun' => $request->tahun
            ]
            );
        return redirect(route('home'));
        // return view('home')
    }

    public function ViewBook()
    {
        $book = Book::all();
        return view('CRUD.view', ['datas' => $book]);
    }

    public function UpdateBook($id)
    {
        $book = Book::find($id);
        return view('CRUD.update', ['buku' => $book]);
    }

    public function showUpdate(BookRequest $request, $id)
    {
       $BookUpdate = Book::where('id', '=', $id)->first(); 
       
        $BookUpdate->update(
            [
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'halaman' => $request->halaman,
                'tahun' => $request->tahun
            ]
            );
        return redirect(route('home'));
        // return view('home')
    }

    public function deleteBook($id)
    {
        $BookDelete = Book::find($id);
        $BookDelete->delete();
        return redirect(route('viewBook'))->with('success', 'Buku telah dihapus');
    }

}