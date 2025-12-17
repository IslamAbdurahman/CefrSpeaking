<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuestionRequest extends FormRequest
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
            'part_id'        => ['required', 'exists:parts,id'],
            'textarea'       => ['required', 'string'],
            'audio_path'     => ['nullable', 'string', 'max:255'],
            'audio_second'   => ['nullable', 'numeric', 'min:0'],
            'ready_second'   => ['required', 'integer', 'min:0'],
            'answer_second'  => ['required', 'integer', 'min:0'],
        ];
    }
}
