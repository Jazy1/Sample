<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posting extends Model
{
    use HasFactory;
    protected $table = 'student_posting';
    protected $primarykey = 'id';

    public function student()
    {
        return $this->belongsTo(student::class);
    }
}
