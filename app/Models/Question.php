<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;

    protected $fillable = [
        'part_id',
        'textarea',
        'audio_path',
        'audio_second',
        'ready_second',
        'answer_second',
    ];

    protected $casts = [
        'audio_second'  => 'float',
        'ready_second'  => 'integer',
        'answer_second' => 'integer',
    ];

    public function part()
    {
        return $this->belongsTo(Part::class);
    }
    public function AttemptAnswers()
    {
        return $this->hasMany(AttemptAnswer::class , 'question_id');
    }
}


