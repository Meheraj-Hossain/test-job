@php
    use \Illuminate\Support\Facades\Auth
@endphp
<div class="sidemenu-container navbar-collapse collapse fixed-menu">
    <div id="remove-scroll">
        <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <li class="sidebar-user-panel">
                <div class="user-panel">
                    <div class="row">
                        <div class="sidebar-userpic">
                            <img src="{{asset('assets/admin/assets/img/dp.jpg')}}" class="img-responsive" alt=""></div>
                    </div>
                    <div class="profile-usertitle">
                        <div class="sidebar-userpic-name"> {{ Auth::user()->user_name }} </div>
                        <div class="profile-usertitle-job"> {{ Auth::user()->city }}</div>
                    </div>
                </div>
            </li>
            <li class="nav-item start {{ (request()->routeIs('dashboard')) ? 'active' : null }}">
                <a href="{{ route('dashboard') }}" class="nav-link nav-toggle">
                    <i class="material-icons">dashboard</i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item start {{ (request()->routeIs('user.*')) ? 'active' : null }}">
                <a href="{{ route('user.index') }}" class="nav-link nav-toggle">
                    <i class="material-icons">perm_identity</i>
                    <span class="title">Users</span>
                </a>
            </li>
            <li class="nav-item start {{ (request()->routeIs('product.*')) ? 'active' : null }}">
                <a href="{{ route('product.index') }}" class="nav-link nav-toggle">
                    <i class="material-icons">store</i>
                    <span class="title">Products</span>
                </a>
            </li>
            <li class="nav-item start {{ request()->routeIs('product-size.*') ||
                                         request()->routeIs('product-color.*') ? 'active'
                                          : null }}">
                <a href="#" class="nav-link nav-toggle">
                    <i class="material-icons">business_center</i>
                    <span class="title">Business Settings</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ request()->routeIs('product-size.*') ? 'active' : null }}">
                        <a href="{{ route('product-size.index') }}" class="nav-link ">
                            <span class="title">Product size</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('product-color.*') ? 'active' : null }}">
                        <a href="{{ route('product-color.index') }}" class="nav-link ">
                            <span class="title">Product color</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
