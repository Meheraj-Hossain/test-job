@extends('layouts.admin.master')
@push('css')
    <!-- data tables -->
    <link href="{{ asset('assets/admin/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}"
          rel="stylesheet" type="text/css"/>
@endpush
@section('breadcrumb')
    <li>
        <i class="fa fa-list"></i>
        <a class="parent-item" href="{{ route('user.index') }}">Users</a>
        <i class="fa fa-angle-right"></i>
    </li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>
                        User list
                    </header>
                    <a href="{{ route('user.create') }}" id="addRow" class="btn btn-primary pull-right mr-3 mt-1">
                        Add user
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table class="table table-hover order-column full-width" id="example4">
                            <thead>
                            <tr>
                                <th class="center">#</th>
                                <th class="center">User name</th>
                                <th class="center">Email</th>
                                <th class="center">City</th>
                                <th class="center">Country</th>
                                <th class="center">Date of Birth</th>
                                <th class="center">status</th>
                                <th class="center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $user)
                                <tr class="">
                                    <td class="center">{{ ++$key }}</td>
                                    <td class="center">{{ ($user->user_name) ?? null }}</td>
                                    <td class="center">{{ $user->email }}</td>
                                    <td class="center">{{ $user->city }}</td>
                                    <td class="center">{{ $user->country }}</td>
                                    <td class="center">{{ $user->date_of_birth }}</td>
                                    <td class="center">{{ $user->status }}</td>
                                    <td class="center" style="width: 20px!important;">
                                        <a href="{{ route('user.edit',$user->id) }}"
                                           class="btn btn-tbl-edit btn-xs pull-left">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-tbl-delete btn-xs" type="submit"
                                                    onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-trash-o "></i>
                                            </button>
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
@endsection
@push('js')
    <!-- data tables -->
    <script src="{{ asset('assets/admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script
        src="{{ asset('assets/admin/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.j') }}s"></script>
    <script src="{{ asset('assets/admin/assets/js/pages/table/table_data.js') }}"></script>
@endpush
