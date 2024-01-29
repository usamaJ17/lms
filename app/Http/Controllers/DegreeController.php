<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
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
        $degree = Degree::all();
        return view('degree.index')->with(compact('degree'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('degree.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $degree = Degree::create($request->all());
        return redirect()->route('degree.index');
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
    public function edit(Degree $degree)
    {
        return view('degree.edit')->with(compact('degree'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Degree $degree)
    {
        $degree->update($request->all());
        return redirect()->route('degree.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Degree $degree)
    {
        $degree->delete();
        return redirect()->route('degree.index');
    }
}
