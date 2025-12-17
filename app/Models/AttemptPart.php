<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttemptPart extends Model
{
    /** @use HasFactory<\Database\Factories\AttemptPartFactory> */
    use HasFactory;



    protected $fillable = [
        'attempt_id',
        'part_id',
        'started_at',
        'finished_at',
        'score',
    ];

    protected $casts = [
        'started_at'  => 'datetime',
        'finished_at' => 'datetime',
        'score'       => 'integer',
    ];

    public function attempt()
    {
        return $this->belongsTo(Attempt::class);
    }

    public function part()
    {
        return $this->belongsTo(Part::class);
    }

}
