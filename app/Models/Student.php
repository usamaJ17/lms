<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table ="student";
    protected $fillable = [
        'adm_num',
        'roll',
        'class',
        'section',
        'first_name',
        'last_name',
        'gender',
        'dob',
        'catagory',
        'religion',
        'rte',
        'mob_num',
        'email',
        'adm_date',
        'photo',
        'blood',
        'house',
        'height',
        'weight',
        'user_id',
        'parent_id',
    ];
    // public function degree(){
    //     $user = User::find($this->user_id);
    //     if($user){
    //         $deg = Degree::find($user->degree_id);
    //         if($deg){
    //             return $deg->name;
    //         } 
    //     }
    //     return "Not Enrolled";
    // }
}
