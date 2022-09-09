<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    protected $stopOnFirstFailure = true; // stop on first failure


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
     * @return array<string  => 'required', mixed>
     */
    public function rules()
    {
        return [
            'name'  => 'required',
            'description'  => 'required',
            'city'  => 'required',
            'job_type'  => 'required',
            'salary'  => 'required',
            'degree'  => 'required',
            'experience'  => 'required',
            'deadline'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A title is required',
        ];
    }
}
