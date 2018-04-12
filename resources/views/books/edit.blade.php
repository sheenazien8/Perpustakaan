<h3>Masukkan buku yang ingin kamu simpan</h3>
<form action="{{ route('books.store',$book->id) }}" method="post" enctype="multipart/form-data">
  @csrf
  {{method_field('PATCH')}}
  <label>Judul Buku</label>
  @if ($errors->has('judul_buku'))
    <strong>{{ $errors->first('judul_buku')}}</strong>
  @endif
  <input type="text" name="judul_buku" value="{{$book->judul_buku}}"> <br>

  <label>Tahun Terbit</label>
  @if ($errors->has('tahun_terbit'))
    <strong>{{ $errors->first('tahun_terbit')}}</strong>
  @endif
  <input type="text" name="tahun_terbit" value="{{$book->tahun_terbit}}"> <br>

  <label>Pengarang </label>
  @if ($errors->has('pengarang'))
    <strong>{{ $errors->first('pengarang')}}</strong>
  @endif
  <input type="text" name="pengarang" value="{{$book->pengarang}}"> <br>

  <label>Cover</label>
  @if ($errors->has('cover'))
    <strong>{{ $errors->first('cover')}}</strong>
  @endif
  <input type="file" name="cover" value="{{$book->cover}}"> <img src="/images/{{$book->cover}}" width="200px" alt=""> <br>

  <button type="submit" name="save">Update!!!</button>
  <button type="submit" name="cancel"><a href="{{route('books.index')}}">Cancel</a> </button>
</form>
