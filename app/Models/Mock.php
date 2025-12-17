<?php

namespace App\Models;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mock extends Model
{
    /** @use HasFactory<\Database\Factories\MockFactory> */
    use HasFactory;



    protected $fillable = [
        'user_id',
        'name',
        'started_at',
        'slug',
        'active',
        'open'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function mock_tests(){
        return $this->hasMany(MockTest::class, 'mock_id');
    }

    public function attempts()
    {
        return $this->hasMany(Attempt::class, 'mock_id');
    }
}
