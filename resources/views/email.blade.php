@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Email</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Email</li>
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
                            <h3 class="card-title">Send Email</h3>
                        </div>
                        <form method="POST" action="{{ route('email.send') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Subject</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter subject" name="subject">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectBorder">Send to</label>
                                    <select class="form-control" name="email" id="exampleSelectBorder">
                                        <option value=null>-- Select User --</option>
                                        @foreach ($users as $d)
                                            <option value="{{ $d->email }}">{{ $d->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Email Body</label>
                                    <textarea class="form-control" rows="4" placeholder="Email ..." spellcheck="true" name="body"></textarea>
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
