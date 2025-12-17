<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttemptRequest extends FormRequest
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
            'user_id'     => ['required', 'exists:users,id'],
            'mock_id'     => ['required', 'exists:mocks,id'],
            'test_id'     => ['required', 'exists:tests,id'],
            'started_at'  => ['required', 'date'],
            'finished_at' => ['nullable', 'date', 'after_or_equal:started_at'],
            'score'       => ['nullable', 'integer', 'min:0'],
        ];
    }
}
