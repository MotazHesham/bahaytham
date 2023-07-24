<?php

namespace App\Http\Requests;

use App\Models\Consultant;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateConsultantRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('consultant_edit');
    }

    public function rules()
    {
        return [
            'photo' => [
                'required',
            ],
            'short_description' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}