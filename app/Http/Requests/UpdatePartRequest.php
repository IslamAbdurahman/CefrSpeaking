<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'test_id'     => ['required', 'exists:tests,id'],
            'name'        => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
            'audio_path'  => ['nullable', 'string', 'max:255'],
        ];
    }
}
