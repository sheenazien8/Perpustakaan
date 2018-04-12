<?php

namespace App\Http\Controllers;
use App\Http\Requests\ErrorFormRequest;
use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
  public function create()
  {
    return view('books.create');
  }
  public function store(ErrorFormRequest $request)
  {
    $judul_buku = $request->judul_buku;
    $tahun_terbit = $request->tahun_terbit;
    $pengarang = $request->pengarang;
    $cover = time().'.'.request()->cover->getClientOriginalExtension();
    request()->cover->move(public_path('images'), $cover);


    Book::create([
      'judul_buku' => $judul_buku,
      'tahun_terbit' => $tahun_terbit,
      'pengarang' => $pengarang,
      'cover' => $cover
    ]);

    return redirect()->route('books.create');
  }
  public function index()
  {
    $book = Book::all();

    return view('books.index',compact('book'));
  }
  public function show($id)
  {
    $book = Book::findOrfail($id);

    return view('books.show', compact('book'));
  }
  public function edit($id)
  {
    $book = Book::findOrfail($id);

    return view('books.edit', compact('book'));
  }
}
