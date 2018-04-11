<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = [
    'judul_buku', 'tahun_terbit', 'pengarang', 'cover'
  ];
}
?>
