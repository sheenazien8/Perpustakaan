<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
  public function create()
  {
    return view('books.create');
  }
  public function store(Request $request)
  {
    $request->validate([
        'nama' => 'required',
        'umur' => 'required',
        'alamat' => 'required',
        'jenis_kelamin' => 'required'
      ]);
      
    $judul_buku = $request->judul_buku;
    $tahun_terbit = $request->tahun_terbit;
    $pengarang = $request->pengarang;
    $cover   = $request->cover;

    Book::create([
      'judul_buku' => $judul_buku,
      'tahun_terbit' => $tahun_terbit,
      'pengarang' => $pengarang,
      'cover' => $cover
    ]);

    return redirect()->route('books.create');
  }
}
