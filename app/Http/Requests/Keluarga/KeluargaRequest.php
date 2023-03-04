<?php

namespace App\Http\Requests\Keluarga;

use App\Models\Keluarga;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class KeluargaRequest extends FormRequest
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
            'nama'          => 'required|string|max:225',
            'jenisKelamin'  => 'required|in:L,P',
        ];
    }

    public function withValidator(Validator $validator)
    {
        $validator->after(function ($validator) {
            $id = isset(Keluarga::where('nama', $this->input('nama'))->first()->id) ? Keluarga::where('nama', $this->input('nama'))->first()->id : '';
            if ($this->input('orangTua') == $id) {
                $validator->errors()->add('orangTua', 'Orang tua tidak boleh sama dengan diri sendiri.');
            }
        });
    }
}
