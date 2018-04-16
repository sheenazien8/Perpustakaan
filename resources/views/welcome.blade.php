@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lemari Buku</div>

                <div class="card-body">
                  <div class="text-center">
                    <h4>Selamat datang di Lemari Bukuku</h4>
                    <a class="btn btn-primary" href="{{ route('books.list') }}">Lihat-lihat </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
