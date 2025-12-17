<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttemptPartRequest extends FormRequest
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
            'attempt_id'  => ['required', 'exists:attempts,id'],
            'part_id'     => ['required', 'exists:parts,id'],
            'started_at'  => ['required', 'date'],
            'finished_at' => ['nullable', 'date', 'after_or_equal:started_at'],
            'score'       => ['nullable', 'integer', 'min:0'],
        ];
    }
}
