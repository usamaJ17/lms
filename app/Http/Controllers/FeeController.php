<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Fee;

class FeeController extends Controller
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
        if(auth()->user()->hasRole('student')){
            $course = Course::where('degree_id',auth()->user()->degree_id)->pluck('id')->toArray();
            $fee = Fee::whereIn('course_id',$course)->get();
        }else{
            $fee = Fee::all();
        }
        return view('fee.index', compact('fee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::all();
        return view('fee.create')->with(compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fee = Fee::create($request->all());
        return redirect()->route('fee.index');
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
        $fee = Fee::find($id);
        $course = Course::all();
        return view('fee.edit')->with(compact('course','fee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fee = Fee::find($id);
        $fee->update($request->all());
        return redirect()->route('fee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fee = Fee::find($id)->delete();
        return redirect()->route('fee.index');
    }
}
