<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorFormRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
      return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
      return [
        'judul_buku' => 'required',
        'tahun_terbit' => 'required',
        'pengarang' => 'required',
        'cover' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg'
      ];
  }
  public function message()
  {
    return[
      'judul_buku.required' => 'isi dulu judul bukunya',
      'tahun_terbit.required' => 'isi dulu tahun terbitnya',
      'pengarang.required' => 'isi dulu siapa pengarangnya',
      'cover.required'=> 'jangan lupa upload gambarnya'
    ];
  }
}
