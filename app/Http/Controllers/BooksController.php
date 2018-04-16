<?php

namespace App\Http\Controllers;
use App\Http\Requests\ErrorFormRequest;
use App\Book;
use Illuminate\Http\Request;
use DataTables;
use Yajra\DataTables\Html\Builder;

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

    return redirect()->route('books.list');
  }
  public function index(Request $request, Builder $htmlBuilder)
  {
    if ($request->ajax()) {
      $books = Book::all();

      return Datatables::of($books)->toJson();
    }

    $html = $htmlBuilder->columns([
      ['data' => 'judul_buku', 'name' => 'judul_buku', 'title' => 'Judul Buku'],
      ['data' => 'tahun_terbit', 'name' => 'tahun_terbit', 'title' => 'Tahun Terbit'],
      ['data' => 'pengarang', 'name' => 'pengarang', 'title' => 'Pengarang'],
    ]);

    return view('books.list',compact('html'));
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
  public function update(ErrorFormRequest $request, $id)
  {
    $book = Book::findOrFail($id);

    $book->judul_buku = $request->judul_buku;
    $book->tahun_terbit = $request->tahun_terbit;
    $book->pengarang = $request->pengarang;
    $book->cover = $request->cover;

    $book->save();

    return redirect()->route('books.list');
  }
  public function destroy($id)
  {
    $book = Book::findOrfail($id);

    $book->delete();

    return redirect()->route('books.list');
  }
}
