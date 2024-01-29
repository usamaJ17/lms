<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
    use HasFactory;
    protected $table ="student_parents";
    protected $fillable = [
        'f_name',
        'f_phone',
        'f_occp',
        'f_photo',
        'm_name',
        'm_phone',
        'm_occp',
        'm_photo',
        'g_name',
        'g_phone',
        'g_occp',
        'g_photo',
        'g_email',
        'g_addr',
        'g_relation',
    ];
}
