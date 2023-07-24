<?php

namespace App\Http\Requests;

use App\Models\Project;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'name_ar' => [
                'string',
                'required',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'owner' => [
                'string',
                'required',
            ],
            'client' => [
                'string',
                'required',
            ],
            'duration' => [
                'string',
                'required',
            ],
            'working_area' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
            'main_image' => [
                'required',
            ],
            'images' => [
                'array',
            ],
            'meta_title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
