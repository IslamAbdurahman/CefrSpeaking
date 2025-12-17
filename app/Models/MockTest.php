<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MockTest extends Model
{
    /** @use HasFactory<\Database\Factories\MockTestFactory> */
    use HasFactory;

    protected $fillable = [
        'mock_id',
        'test_id',
    ];

    public function mock()
    {
        return $this->belongsTo(Mock::class , 'mock_id');
    }

    public function test()
    {
        return $this->belongsTo(Test::class , 'test_id');
    }
}
