<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'rules', 'questions', 'subject', 'classroom',
    ];

    public function student()
    {
        return $this->belongsTo(student::class);
    }

    public function teacher()
    {
        return $this->belongsTo(teacher::class);
    }
}
