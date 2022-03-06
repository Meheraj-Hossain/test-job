@extends('layouts.admin.master')
@php
use \App\Models\User;
use \App\Models\Product;
use \App\Models\Size;
use \App\Models\Color;
@endphp
@section('content')
    <!-- start widget -->
    <div class="state-overview">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-blue">
                    <span class="info-box-icon push-bottom"><i class="fa fa-user"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total users </span>
                        <span class="info-box-number">{{ User::where('user_name','!=','admin')->get()->count() }}</span>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-orange">
                    <span class="info-box-icon push-bottom"><i class="fa fa-chain"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total products </span>
                        <span class="info-box-number">{{ Product::get()->count() }}</span>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-b-yellow">
                    <span class="info-box-icon push-bottom"><i class="fa fa-list"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total size </span>
                        <span class="info-box-number">{{ Size::get()->count() }}</span>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-b-black">
                    <span class="info-box-icon push-bottom"><i class="fa fa-list"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total color </span>
                        <span class="info-box-number">{{ Color::get()->count() }}</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
