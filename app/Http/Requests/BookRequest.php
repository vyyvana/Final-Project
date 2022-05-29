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
            'category' => 'required',
            'nama' => 'required|min:5|max:80',
            'harga' => 'required|integer|min:1',
            'jumlah' => 'required|integer|min:1',
            'image' => 'required|image'
        ];
    }

    public function messages()
    {
        return[
            'category.required' => 'Harus mengisi kategori',
            'nama.required' => 'Harus mengisi nama',
            'harga.required' => 'Harus mengisi harga',
            'jumlah.required' => 'Harus mengisi jumlah',
            'image.required' => 'Harus mengupload foto'
        ];
    }

}
