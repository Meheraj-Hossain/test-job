@extends('layouts.admin.master')
@push('css')
    <!-- data tables -->
    <link href="{{ asset('assets/admin/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}"
          rel="stylesheet" type="text/css"/>
@endpush
@section('breadcrumb')
    <li>
        <i class="fa fa-list"></i>
        <a class="parent-item" href="">Business settings</a>
        <i class="fa fa-angle-right"></i>
        <i class="fa fa-plus-circle"></i>
        <a class="parent-item" href="{{ route('product-size.index') }}">Product size</a>
        <i class="fa fa-angle-right"></i>
    </li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>
                        Product size list
                    </header>
                    <a href="{{ route('product-size.create') }}" id="addRow" class="btn btn-primary pull-right mr-3 mt-1">
                        Add product size
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                <div class="card-body ">
                    <div class="table-scrollable">
                        <table class="table table-hover order-column full-width" id="example4">
                            <thead>
                            <tr>
                                <th class="center">#</th>
                                <th class="center">Color name</th>
                                <th class="center">Details</th>
                                <th class="center">status</th>
                                <th class="center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sizes as $key => $size)
                                <tr class="">
                                    <td class="center">{{ ++$key }}</td>
                                    <td class="center">{{ $size->name }}</td>
                                    <td class="center">{{ $size->details }}</td>
                                    <td class="center">{{ $size->status }}</td>
                                    <td class="center" style="width: 20px!important;">
                                        <a href="{{ route('product-size.edit',$size->id) }}"
                                           class="btn btn-tbl-edit btn-xs pull-left">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('product-size.destroy',$size->id) }}" method="POST">
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

