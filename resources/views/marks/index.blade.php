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
                            <h3 class="card-title">Search Course</h3>
                        </div>
                        <form method="POST" action="{{ route('mark.course') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleSelectBorder">Course</label>
                                    <select class="form-control" name="course_id" id="exampleSelectBorder">
                                        <option value=null>-- Select Course --</option>    
                                        @foreach ($course as $d)
                                            <option value="{{ $d->id }}" >{{ $d->name }}</option>    
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
