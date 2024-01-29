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
                            <h3 class="card-title">Edit student</h3>
                        </div>
                        <form method="POST" action="{{ route('student.update',['student'=>$std]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="adm_num">Admission No</label>
                                        <input type="text" class="form-control" id="adm_num" value="{{ $student->adm_num }}" name="adm_num">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="roll">Roll Number</label>
                                        <input type="text" class="form-control" id="roll" value="{{ $student->roll }}" name="roll">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="degree">Degree</label>
                                        <select class="form-control" id="degree" value="{{ $student->degree_id }}" name="degree_id">
                                            @foreach ($degree as $idegree)
                                                <option @if($idegree->id == $std->degree_id) selected @endif value="{{ $idegree->id }}">{{ $idegree->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" value="{{ $student->first_name }}" name="first_name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" value="{{ $student->last_name }}" name="last_name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" id="gender" value="{{ $student->gender }}" name="gender">
                                            <option @if($student->gender == "Male") selected @endif value="Male">Male</option>
                                            <option @if($student->gender == "Female") selected @endif value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" value="{{ $student->dob }}" name="dob">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="category">Category</label>
                                        <input type="text" class="form-control" id="category" value="{{ $student->category }}" name="category">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="religion">Religion</label>
                                        <input type="text" class="form-control" id="religion" value="{{ $student->religion }}" name="religion">
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="rte">RTE</label>
                                        <select class="form-control" id="rte" value="{{ $student->rte }}" name="rte">
                                            <option @if($student->rte == "Yes") selected @endif value="Yes">Yes</option>
                                            <option @if($student->rte == "No") selected @endif value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="mob_num">Mobile Number</label>
                                        <input type="text" class="form-control" id="mob_num" value="{{ $student->mob_num }}" name="mob_num">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" value="{{ $student->email }}" name="email">
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="adm_date">Admission Date</label>
                                        <input type="date" class="form-control" id="adm_date" value="{{ $student->adm_date }}" name="adm_date">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="photo">Student Photo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="photo" value="{{ $student->photo }}" name="photo">
                                            <label class="custom-file-label" for="photo">Upload Student Photo</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="blood">Blood Group</label>
                                        <select class="form-control" id="blood" value="{{ $student->blood }}" name="blood">
                                            <option @if($student->blood == "A+") selected @endif value="A+">A+</option>
                                            <option @if($student->blood == "A-") selected @endif value="A-">A-</option>
                                            <option @if($student->blood == "B+") selected @endif value="B+">B+</option>
                                            <option @if($student->blood == "B-") selected @endif value="B-">B-</option>
                                            <option @if($student->blood == "O+") selected @endif value="O+">O+</option>
                                            <option @if($student->blood == "O-") selected @endif value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="house">Student House</label>
                                        <input type="text" class="form-control" id="house" value="{{ $student->house }}" name="house">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="height">Height</label>
                                        <input type="text" class="form-control" id="height" value="{{ $student->height }}" name="height">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="weight">Weight</label>
                                        <input type="text" class="form-control" id="weight" value="{{ $student->weight }}" name="weight">
                                    </div>
                                </div>
                        
                                <div class="row mt-2 mb-2">
                                    <h4>Parents Details</h4>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="f_name">Father Name</label>
                                        <input type="text" class="form-control" id="f_name" value="{{ $std_p->f_name }}" name="f_name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="f_phone">Father Phone</label>
                                        <input type="text" class="form-control" id="f_phone" value="{{ $std_p->f_phone }}" name="f_phone">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="f_occp">Father Occupation</label>
                                        <input type="text" class="form-control" id="f_occp" value="{{ $std_p->f_occp }}" name="f_occp">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="f_photo">Father Photo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="f_photo" value="{{ $std_p->f_photo }}" name="f_photo">
                                            <label class="custom-file-label" for="f_photo">Upload Father Photo</label>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="m_name">Mother Name</label>
                                        <input type="text" class="form-control" id="m_name" value="{{ $std_p->m_name }}" name="m_name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="m_phone">Mother Phone</label>
                                        <input type="text" class="form-control" id="m_phone" value="{{ $std_p->m_phone }}" name="m_phone">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="m_occp">Mother Occupation</label>
                                        <input type="text" class="form-control" id="m_occp" value="{{ $std_p->m_occp }}" name="m_occp">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="m_photo">Mother Photo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="m_photo" value="{{ $std_p->m_photo }}" name="m_photo">
                                            <label class="custom-file-label" for="m_photo">Upload Mother Photo</label>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="g_relation">Guardian Relation</label>
                                        <input type="text" class="form-control" id="g_relation" value="{{ $std_p->g_relation }}" name="g_relation">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="g_name">Guardian Name</label>
                                        <input type="text" class="form-control" id="g_name" value="{{ $std_p->g_name }}" name="g_name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="g_email">Guardian Email</label>
                                        <input type="text" class="form-control" id="g_email" value="{{ $std_p->g_email }}" name="g_email">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="g_photo">Guardian Photo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="g_photo" value="{{ $std_p->g_photo }}" name="g_photo">
                                            <label class="custom-file-label" for="g_photo">Upload Guardian Photo</label>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="g_phone">Guardian Phone</label>
                                        <input type="text" class="form-control" id="g_phone" value="{{ $std_p->g_phone }}" name="g_phone">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="g_occp">Guardian Occupation</label>
                                        <input type="text" class="form-control" id="g_occp" value="{{ $std_p->g_occp }}" name="g_occp">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="g_addr">Guardian Address</label>
                                        <input type="text" class="form-control" id="g_addr" value="{{ $std_p->g_addr }}" name="g_addr">
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
