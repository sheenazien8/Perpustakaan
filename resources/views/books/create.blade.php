<h3>Masukkan buku yang ingin kamu simpan</h3>
<form action="{{ route('books.store') }}" method="post">
  @csrf
  <label>Judul Buku</label>
  <input type="text" name="judul_buku"> <br>

  <label>Tahun Terbit</label>
  <input type="text" name="tahun_terbit"> <br>

  <label>Pengarang</label>
  <input type="text" name="pengarang"> <br>

  <label>Cover</label>
  <input type="text" name="cover"> <br>

  <button type="submit" name="save">Save!!!</button>
</form>
