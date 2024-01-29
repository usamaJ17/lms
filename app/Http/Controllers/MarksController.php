<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Marks;
use App\Models\User;
use Illuminate\Http\Request;

class MarksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->hasRole('teacher')){
            $course = Course::where('teacher_id',auth()->user()->id)->get();
        }elseif(auth()->user()->hasRole('student')){
            $course = Course::where('degree_id',auth()->user()->degree_id)->get();
        }else{
            $course = Course::all();
        }
        return view('marks.index')->with(compact('course'));
    }

    public function course(Request $req)
    {
        if(auth()->user()->hasRole('student')){
            $marks = Marks::where('student_id',auth()->user()->id)->where('course_id',$req->course_id)->get();
            return view('marks.student')->with(compact('marks'));
        }
        $cor = Course::find($req->course_id);
        // $students = User::role('student')->where('degree_id',$cor->degree_id)->get();
        $marks = Marks::where('course_id',$req->course_id)->get();
        return view('marks.list')->with(compact('marks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->hasRole('teacher')){
            $course = Course::where('teacher_id',auth()->user()->id)->get();
        }else{
            $course = Course::all();
        }
        $students = User::role('student')->get();
        return view('marks.create')->with(compact('students','course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mark = Marks::create($request->all());
        return redirect()->route('mark.index');
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
    public function edit(string $id)
    {
        $mark = Marks::find($id);
        $course = Course::all();
        $students = User::role('student')->get();
        return view('marks.edit')->with(compact('students','course','mark'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marks $mark)
    {
        $mark->update($request->all());
        return redirect()->route('mark.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marks $mark)
    {
        $mark->delete();
        return redirect()->back();
    }
}
