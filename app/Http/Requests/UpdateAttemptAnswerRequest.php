<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAttemptAnswerRequest extends FormRequest
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
            'attempt_id'    => ['required', 'exists:attempts,id'],
            'question_id'   => ['required', 'exists:questions,id'],
            'started_at'    => ['required', 'date'],
            'finished_at'   => ['nullable', 'date', 'after_or_equal:started_at'],
            'audio_path'    => ['nullable', 'string', 'max:255'],
            'audio_second'  => ['nullable', 'numeric', 'min:0'],
            'transcript'    => ['nullable', 'string'],
            'review_ai'     => ['nullable', 'string'],
            'review'        => ['nullable', 'string'],
            'score_ai'      => ['nullable', 'integer', 'min:0'],
            'score'         => ['nullable', 'integer', 'min:0'],
        ];
    }
}
