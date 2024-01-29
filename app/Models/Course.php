<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $fillable = [
        'name',
        'degree_id',
        'teacher_id'
    ];
    public function degree()
    {
        return $this->belongsTo(Degree::class, 'degree_id', 'id');
    }
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
}
