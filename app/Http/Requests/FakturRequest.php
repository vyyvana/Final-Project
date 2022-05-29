<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FakturRequest extends FormRequest
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
            // 'category' => 'required',
            'alamat' => 'required|min:10|max:100',
            'kodepos' => 'required|alpha_num',
            'jumlahbarang' => 'required|integer|min:1',
            // 'image' => 'required|image'
        ];
    }

    public function messages()
    {
        return[
            // 'category.required' => 'Harus mengisi kategori',
            'alamat.required' => 'Harus mengisi alamat',
            'kodepos.required' => 'Harus mengisi kodepos',
            'jumlahbarang.required' => 'Harus mengisi jumlah barang yang diinginkan',
            // 'image.required' => 'Harus mengupload foto'
        ];
    }
}
