<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $table ='fee';
    protected $fillable =[
        'course_id',
        'fee'
    ];
    public function course(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
}
