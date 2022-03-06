@extends('layouts.admin.master')
@section('breadcrumb')
    <li>
        <i class="fa fa-list"></i>
        <a class="parent-item" href="{{ route('user.index') }}">User list</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <i class="fa fa-user"></i>
    <li class="active">Add User</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>User create form</header>
                </div>
                <div class="card-body" id="bar-parent1">
                    <form action="{{ route('user.store') }}" id="form_sample_1" class="form-horizontal" method="POST">
                        @csrf
                        @include('admin.users._form')
                        <div class="form-group">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

