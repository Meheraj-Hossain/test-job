<?php

use \Illuminate\Support\Facades\Auth;

?>
<div class="page-header-inner ">
    <!-- logo start -->
    <div class="page-logo">
        <a href="index.html">
            <img alt="" src="assets/img/logo.png">
            <span class="logo-default">Test Job</span> </a>
    </div>
    <!-- logo end -->
    <ul class="nav navbar-nav navbar-left in">
        <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
    </ul>
    <!-- start mobile menu -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
       data-target=".navbar-collapse">
        <span></span>
    </a>
    <!-- end mobile menu -->
    <!-- start header menu -->
    <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
            <!-- start manage user dropdown -->
            <li class="dropdown dropdown-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
                    <img alt="" class="img-circle" src="{{ asset('assets/admin/assets/img/dp.jpg') }}"/>
                    <span class="username username-hide-on-mobile">{{ Auth::user()->user_name }}</span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-default animated jello">
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="icon-logout"></i> Log Out </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" style="display:none" method="POST">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>
    </div>
</div>
