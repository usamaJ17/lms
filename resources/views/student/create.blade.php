@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Student</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Student</li>
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
                            <h3 class="card-title">Create a new student</h3>
                        </div>
                        <form method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="adm_num">Admission No</label>
                                        <input type="text" class="form-control" id="adm_num" name="adm_num">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="roll">Roll Number</label>
                                        <input type="text" class="form-control" id="roll" name="roll">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="degree">Degree</label>
                                        <select class="form-control" id="degree" name="degree_id">
                                            @foreach ($degree as $idegree)
                                                <option value="{{ $idegree->id }}">{{ $idegree->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="category">Category</label>
                                        <input type="text" class="form-control" id="category" name="category">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="religion">Religion</label>
                                        <input type="text" class="form-control" id="religion" name="religion">
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="rte">RTE</label>
                                        <select class="form-control" id="rte" name="rte">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="mob_num">Mobile Number</label>
                                        <input type="text" class="form-control" id="mob_num" name="mob_num">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="adm_date">Admission Date</label>
                                        <input type="date" class="form-control" id="adm_date" name="adm_date">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="photo">Student Photo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="photo" name="photo">
                                            <label class="custom-file-label" for="photo">Upload Student Photo</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="blood">Blood Group</label>
                                        <select class="form-control" id="blood" name="blood">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="house">Student House</label>
                                        <input type="text" class="form-control" id="house" name="house">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="height">Height</label>
                                        <input type="text" class="form-control" id="height" name="height">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="weight">Weight</label>
                                        <input type="text" class="form-control" id="weight" name="weight">
                                    </div>
                                </div>
                        
                                <div class="row mt-2 mb-2">
                                    <h4>Parents Details</h4>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="f_name">Father Name</label>
                                        <input type="text" class="form-control" id="f_name" name="f_name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="f_phone">Father Phone</label>
                                        <input type="text" class="form-control" id="f_phone" name="f_phone">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="f_occp">Father Occupation</label>
                                        <input type="text" class="form-control" id="f_occp" name="f_occp">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="f_photo">Father Photo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="f_photo" name="f_photo">
                                            <label class="custom-file-label" for="f_photo">Upload Father Photo</label>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="m_name">Mother Name</label>
                                        <input type="text" class="form-control" id="m_name" name="m_name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="m_phone">Mother Phone</label>
                                        <input type="text" class="form-control" id="m_phone" name="m_phone">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="m_occp">Mother Occupation</label>
                                        <input type="text" class="form-control" id="m_occp" name="m_occp">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="m_photo">Mother Photo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="m_photo" name="m_photo">
                                            <label class="custom-file-label" for="m_photo">Upload Mother Photo</label>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="g_relation">Guardian Relation</label>
                                        <input type="text" class="form-control" id="g_relation" name="g_relation">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="g_name">Guardian Name</label>
                                        <input type="text" class="form-control" id="g_name" name="g_name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="g_email">Guardian Email</label>
                                        <input type="text" class="form-control" id="g_email" name="g_email">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="g_photo">Guardian Photo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="g_photo" name="g_photo">
                                            <label class="custom-file-label" for="g_photo">Upload Guardian Photo</label>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="g_phone">Guardian Phone</label>
                                        <input type="text" class="form-control" id="g_phone" name="g_phone">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="g_occp">Guardian Occupation</label>
                                        <input type="text" class="form-control" id="g_occp" name="g_occp">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="g_addr">Guardian Address</label>
                                        <input type="text" class="form-control" id="g_addr" name="g_addr">
                                    </div>
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
