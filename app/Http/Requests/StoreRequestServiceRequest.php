<?php

namespace App\Http\Requests;

use App\Models\RequestService;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRequestServiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('request_service_create');
    }

    public function rules()
    {
        return [
            'finished_files' => [
                'array',
                'required',
            ],
            'finished_files.*' => [
                'required',
            ],
            'finished_files_from_admin' => [
                'array',
                'required',
            ],
            'finished_files_from_admin.*' => [
                'required',
            ],
            'certificates' => [
                'array',
                'required',
            ],
            'certificates.*' => [
                'required',
            ],
            'start_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'end_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'done_time' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'duration_to_edit' => [
                'string',
                'nullable',
            ],
            'user_id' => [
                'required',
                'integer',
            ],
            'service_id' => [
                'required',
                'integer',
            ],
            'consultant_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
