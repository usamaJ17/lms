@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Marks</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Marks</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit mark</h3>
                        </div>
                        <form method="POST" action="{{ route('mark.update',['mark'=>$mark]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleSelectBorder">Course</label>
                                    <select class="form-control" name="course_id" id="exampleSelectBorder">
                                        <option value=null>-- Select Course --</option>    
                                        @foreach ($course as $d)
                                            <option @if ($d->id == $mark->course_id) selected @endif value="{{ $d->id }}">{{ $d->name }}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectBorder">Student</label>
                                    <select class="form-control" name="student_id" id="exampleSelectBorder">
                                        <option value=null>-- Select Student --</option>    
                                        @foreach ($students as $d)
                                            <option @if ($d->id == $mark->student_id) selected @endif value="{{ $d->id }}">{{ $d->name }}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Grade</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter grade" value={{ $mark->grade }} name="grade">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
