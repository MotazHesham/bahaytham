<?php

namespace App\Http\Requests;

use App\Models\Aboutu;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAboutuRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('aboutu_create');
    }

    public function rules()
    {
        return [
            'site_name' => [
                'string',
                'required',
            ],
            'logo' => [
                'required',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'mission' => [
                'string',
                'nullable',
            ],
            'vision' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'phone_number' => [
                'string',
                'nullable',
            ],
            'author_seo' => [
                'string',
                'nullable',
            ],
            'sitemap_link_seo' => [
                'string',
                'nullable',
            ],
        ];
    }
}
