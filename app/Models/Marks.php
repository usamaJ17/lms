<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory;
    protected $table ="mark";
    protected $fillable =[
        'course_id',
        'student_id',
        'teacher_id',
        'grade'
    ];
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
