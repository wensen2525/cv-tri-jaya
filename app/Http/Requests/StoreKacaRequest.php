<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKacaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:255'],
            'jenis' => ['required', 'string', 'max:255'],
            'ukuran' => ['required', 'string', 'max:255'],
            'warna' => ['required', 'string', 'max:255'],
            'ketebalan' => ['required', 'string', 'max:255'],
            'harga' => ['required', 'nummeric', 'min:0'],
            'stok' => ['required', 'nummeric', 'min:0'],
        ];
    }
}
