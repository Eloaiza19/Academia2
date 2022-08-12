<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCursoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //'nombre' => 'required|max:100',
            //'nombre' => 'required|size:12',
            'nombre' => 'required|email:rfc',
            'imagen' => 'required|mimes:jpg',
            //'imagen' => 'required|image',
            //'imagen' => 'required|file|size:320',
            //'imagen' => 'required|mimetypes:video/mp4',
            //'imagen' => 'required|dimensions:min_width=60,min_height=60',
            'description' => 'required|max:50',
            'duracion' => 'required|numeric:10'
        ];
    }
}


