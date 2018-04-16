@extends('layouts.app')
@section('content')
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
      <li class="breadcrumb-item"><a href="{{route('books.list')}}">Daftar Buku</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Buku</li>
    </ol>
  </nav>
  <div class="col-md-6">
    <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="formGroupExampleInput">Judul Buku</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Judul Buku" name="judul_buku">
            @if ($errors->has('judul_buku'))
              <div class="alert alert-primary" role="alert">
                {{ $errors->first('judul_buku')}}
              </div>
            @endif
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput1">Tahun Terbit</label>
            <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Masukkan Tahun Terbit" name="tahun_terbit">
            @if ($errors->has('tahun_terbit'))
              <div class="alert alert-primary" role="alert">
                {{ $errors->first('tahun_terbit')}}
              </div>
            @endif
        </div>
        <div class="form-group">
          <label for="pengarang">Pengarang</label>
          <input type="text" class="form-control" id="pengarang" placeholder="Masukkan Nama Pengarang" name="pengarang">
            @if ($errors->has('pengarang'))
              <div class="alert alert-primary" role="alert">
                {{ $errors->first('pengarang')}}
              </div>
            @endif
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Cover</span>
          </div>
          <div class="custom-file">
            <label class="custom-file-label" for="cover">Masukkan Sampul</label>
            <input type="file" class="custom-file-input" id="cover" name="cover">
            @if ($errors->has('cover'))
              <div class="alert alert-primary" role="alert">
                {{ $errors->first('cover')}}
              </div>
            @endif
          </div>
        </div>
        <div class="form-group">
          <button type="submit" name="save" class="btn btn-primary">Save!!!</button>
          <a href="{{route('books.list')}}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>

  </div>
  <div class="mb-4">

  </div>
  <div class="card-footer text-muted">
    &copy copyright 2018
  </div>

</div>
@endsection
