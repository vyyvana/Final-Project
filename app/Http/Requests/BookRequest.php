<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'judul' => 'required|min:5|max:20',
            'penulis' => 'required|min:5|max:20',
            'halaman' => 'required|integer|min:0',
            'tahun' => 'required|integer|min:2000|max:2021',
        ];
    }

    public function messages()
    {
        return[
            'judul.required' => 'Harus mengisi judul',
            'penulis.required' => 'Harus mengisi penulis',
            'halaman.required' => 'Harus mengisi halaman',
            'tahun.required' => 'Harus mengisi tahun'
        ];
    }

}
