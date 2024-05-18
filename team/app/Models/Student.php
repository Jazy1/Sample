<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'classroom', 'quiz', 'post',
    ];

    public function quiz()
    {
        return $this->hasMany(quiz::class);
    }

    public function post()
    {
        return $this->hasMany(post::class);
    }
}
