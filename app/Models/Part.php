<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    /** @use HasFactory<\Database\Factories\PartFactory> */
    use HasFactory;

    protected $fillable = [
        'test_id',
        'name',
        'description',
        'audio_path',
    ];

    public function test()
    {
        return $this->belongsTo(Test::class , 'test_id');
    }

    public function attemptParts()
    {
        return $this->hasMany(AttemptPart::class , 'part_id');
    }
    public function questions()
    {
        return $this->hasMany(Question::class , 'part_id');
    }
}
