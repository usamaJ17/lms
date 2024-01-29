@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Course</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Course</li>
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
                            <h3 class="card-title">Create a new course</h3>
                        </div>
                        <form method="POST" action="{{ route('course.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter course name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectBorder">Degree</label>
                                    <select class="form-control" name="degree_id" id="exampleSelectBorder">
                                        <option value=null>-- Select Degree --</option>    
                                        @foreach ($degree as $d)
                                            <option value="{{ $d->id }}">{{ $d->name }}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectBorder">Teacher</label>
                                    <select class="form-control" name="teacher_id" id="exampleSelectBorder">
                                        <option value=null>-- Select Teacher --</option>    
                                        @foreach ($teachers as $d)
                                            <option value="{{ $d->id }}">{{ $d->name }}</option>    
                                        @endforeach
                                    </select>
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
