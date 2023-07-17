<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKacaRequest extends FormRequest
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
            'nama' => ['sometimes', 'required', 'string', 'max:255'],
            'jenis' => ['sometimes', 'required', 'string', 'max:255'],
            'ukuran' => ['sometimes', 'required', 'string', 'max:255'],
            'warna' => ['sometimes', 'required', 'string', 'max:255'],
            'ketebalan' => ['sometimes', 'required', 'string', 'max:255'],
            'harga' => ['sometimes', 'required', 'numeric'],
            'stok' => ['sometimes', 'required', 'numeric'],
        ];
    }
}
