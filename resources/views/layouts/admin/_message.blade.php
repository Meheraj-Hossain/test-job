@if(session()->has('message'))
    <div class="alert alert-success" style="font-weight: bold">
        {{session('message')}}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger" style="font-weight: bold">
        {{session('error')}}
    </div>
@endif
