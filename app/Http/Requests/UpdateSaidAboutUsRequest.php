<?php

namespace App\Http\Requests;

use App\Models\SaidAboutUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSaidAboutUsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('said_about_us_edit');
    }

    public function rules()
    {
        return [
            'user' => [
                'string',
                'required',
            ],
            'text' => [
                'required',
            ],
        ];
    }
}
