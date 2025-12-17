<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttemptAnswer extends Model
{
    /** @use HasFactory<\Database\Factories\AttemptAnswerFactory> */
    use HasFactory;


    protected $fillable = [
        'attempt_id',
        'question_id',
        'started_at',
        'finished_at',
        'audio_path',
        'audio_second',
        'transcript',
        'review_ai',
        'review',
        'score_ai',
        'score',
    ];

    protected $casts = [
        'started_at'   => 'datetime',
        'finished_at'  => 'datetime',
        'audio_second' => 'float',
        'score_ai'     => 'integer',
        'score'        => 'integer',
    ];

    public function attempt()
    {
        return $this->belongsTo(Attempt::class , 'attempt_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class , 'question_id');
    }
}
