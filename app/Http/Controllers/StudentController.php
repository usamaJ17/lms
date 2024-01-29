<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentParent;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = User::role('student')->get();
        return view('student.index')->with(compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $degree = Degree::all();
        return view('student.create')->with(compact('degree'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->first_name,
            'email' => $request->email,
            'degree_id' => $request->degree_id,
            'password' => Hash::make('password'),
        ]);
        $studentRole = Role::where('name', 'student')->first();
        $user->assignRole($studentRole);
        $request->merge([
            'user_id' => $user->id
        ]);
        $p = StudentParent::create($request->all());
        $request->merge([
            'parent_id' => $p->id
        ]);
        Student::create($request->all());
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($u_id)
    {
        $std= User::find($u_id);
        $student = Student::where('user_id',$std->id)->first();
        if($student){
            $std_p = StudentParent::find($student->parent_id);
            if($std_p){
                $degree = Degree::all();
                return view('student.edit')->with(compact('student','std_p','degree','std'));
            }
            else{
                dd("error-2");
            }
        }
        else{
            dd("error-1");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $student)
    {
        $student->degree_id = $request->degree_id;
        $student->name = $request->first_name;
        $student->email = $request->email;
        $student->save();
        $std = Student::where('user_id',$student->id)->first();
        $std->update($request->all());
        $p = StudentParent::find($std->parent_id);
        $p->update($request->all());
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $student)
    {
        $std = Student::where('user_id',$student->id)->first();
        $p = StudentParent::find($std->parent_id);
        $std->delete();
        $p->delete();
        $student->delete();
        return redirect()->route('student.index');
    }
}
