<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            //
            'event_name' => ['required', 'max:191'],
            'event_description' => ['nullable'],
            'event_date' => ['nullable'],
            'main_banner' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:50000'],
            'details_banner' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:50000'],
            'event_status' => ['nullable'],
            'created_by' => ['numeric']
        ];
    }
}
