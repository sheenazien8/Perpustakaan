<h3>Daftar buku yang tersimpan</h3>
<a href="{{route('books.create')}}">+ tambah buku</a>
<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Judul Buku</th>
      <th>Tahun Terbit</th>
      <th>Pengarang</th>
      <th>Cover</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($book as $key => $book)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$book->judul_buku}}</td>
        <td>{{$book->tahun_terbit}}</td>
        <td>{{$book->pengarang}}</td>
        <td><img src="/images/{{$book->cover}}" width="80px" alt=""></td>
        <td><a      href="{{route('books.show',$book->id)}}">Lihat buku</a>
        <a href="{{route('books.edit',$book->id)}}">Edit Buku</a>
        <form action="{{route('books.destroy',$book->id)}}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="Hapus!!!">
        </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
