@extends('layouts.app')
@section('content')
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
      <li class="breadcrumb-item active" aria-current="page">Daftar Buku</li>
    </ol>
  </nav>
  <div class="card">
    <div class="card-body">
      {!! $html->table((['class' => 'table-striped'])) !!}
    </div>
  </div>
</div>
@endsection

@section('scripts')
  {!! $html->scripts() !!}
@endsection
