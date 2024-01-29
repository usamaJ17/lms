@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Teacher</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Teacher</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="card-title">Teacher</h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{ route('teacher.create') }}"><button type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> &nbsp; Create</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="data-table">
                                <thead>
                                    <tr>
                                        <th style="width: 8%">#</th>
                                        <th>Name</th>
                                        <th>No of courses</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $de)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $de->name }}</td>
                                            <td>{{ $de->courseCount() }}</td>
                                            <td> 
                                                <a href="{{ route('teacher.edit', ['teacher' => $de]) }}">
                                                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i>&nbsp;Edit</button>
                                                </a>&nbsp;&nbsp;
                                                <form action="{{ route('teacher.destroy', ['teacher' => $de]) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Delete</button>
                                                </form>                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
