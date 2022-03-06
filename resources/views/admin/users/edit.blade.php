@extends('layouts.admin.master')
@section('breadcrumb')
    <li>
        <i class="fa fa-user"></i>
        <a class="parent-item" href="{{ route('user.index') }}">User list</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <i class="fa fa-user"></i>
    <li class="active">Edit user</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Edit user form</header>
                </div>
                <div class="card-body" id="bar-parent1">
                    <form action="{{ route('user.update',$user->id) }}" id="form_sample_1"
                          class="form-horizontal" method="POST">
                        @csrf
                        @method('put')
                        @include('admin.users._form')
                        <div class="form-group">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

