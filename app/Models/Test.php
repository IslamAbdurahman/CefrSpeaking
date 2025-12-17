<?php

namespace App\Models;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /** @use HasFactory<\Database\Factories\TestFactory> */
    use HasFactory;


    protected $fillable = [
        'user_id',
        'name',
        'description',
        'audio_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }


    public function mock_tests(){
        return $this->hasMany(MockTest::class, 'test_id');
    }

    public function attempts()
    {
        return $this->hasMany(Attempt::class, 'test_id');
    }
    public function parts()
    {
        return $this->hasMany(Part::class, 'test_id');
    }
}
