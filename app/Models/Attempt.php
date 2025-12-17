<?php

namespace App\Models;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attempt extends Model
{
    /** @use HasFactory<\Database\Factories\AttemptFactory> */
    use HasFactory;


    protected $fillable = [
        'user_id',
        'mock_id',
        'test_id',
        'started_at',
        'finished_at',
        'score',
    ];

    protected $casts = [
        'started_at'  => 'datetime',
        'finished_at' => 'datetime',
        'score'       => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function mock()
    {
        return $this->belongsTo(Mock::class , 'mock_id');
    }

    public function test()
    {
        return $this->belongsTo(Test::class , 'test_id');
    }

    public function AttemptAnswers()
    {
        return $this->hasMany(AttemptAnswer::class , 'attempt_id');
    }

}
