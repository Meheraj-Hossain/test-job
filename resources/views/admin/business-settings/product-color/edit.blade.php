@extends('layouts.admin.master')
@section('breadcrumb')
    <li>
        <i class="fa fa-list"></i>
        <a class="parent-item" href="">Business settings</a>
        <i class="fa fa-angle-right"></i>
        <i class="fa fa-plus-circle"></i>
        <a class="parent-item" href="{{ route('product-color.index') }}">Product color</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <i class="fa fa-chain"></i>
    <li class="active">Edit product color</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Edit product color form</header>
                </div>
                <div class="card-body" id="bar-parent1">
                    <form action="{{ route('product-color.update',$color->id) }}" id="form_sample_1"
                          class="form-horizontal" method="POST">
                        @csrf
                        @method('put')
                        @include('admin.business-settings.product-color._form')
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

