<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Requests\FakturRequest;
use App\Book;
use App\Faktur;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // dd($request);
        $path = $request->file('image')->store('public/images');
        $path = substr($path, strlen('public/'));
        $book = Book::create(
            [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
                // 'user_id' => Auth::user()->id,
                'image' => $path
            ]
            );
        
        $book->category()->attach($request->category);
        return redirect(route('home'))->with('success', 'Buku berhasil dibuat');
        // return view('home')
    }

    public function ViewBook()
    {
        $book = Book::all();
        return view('CRUD.view', ['datas' => $book]);
    }
    public function ViewThings($id)
    {
        $book = Book::find($id);
        return view('CRUD.viewThings', ['datas' => $book]);
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
        return redirect(route('viewBook'))->with('success', 'Barang telah dihapus');
    }

    public function inFaktur($id)
    {
        $Book = Book::find($id);
        return view('CRUD.faktur', ['datas' => $Book]);
    }


    public function fakturForm(FakturRequest $request, $id)
    {
        // Query Builder
        // Elonguent
       
        $Book = Book::find($id);
        $test = array();
        foreach($Book->category as $category)
        {
            array_push($test, $category->category_name);
        }
        $faktur = Faktur::create(
            [
                'namabarang' => $Book->nama,
                'kategori' => implode(", ", $test),
                'alamat' => $request->alamat,
                'kodepos' => $request->kodepos,
                'hargabarang' => $Book->harga,
                'jumlahbarang' => $request->jumlahbarang,
                'user_id' => Auth::user()->id,
            ]
            );
            $BookUpdate = Book::where('id', '=', $id)->first(); 
       
            $BookUpdate->update(
            [
                'jumlah' => $Book->jumlah - $faktur->jumlahbarang,
            ]
            );
        return redirect(route('home'))->with('success', 'Faktur berhasil dibuat');
        // return view('home')
    }

    public function ViewFaktur()
    {
        $faktur = Faktur::all();
        // $Book = Book::all();
        return view('CRUD.viewFaktur', ['datas' => $faktur]);
    }

}