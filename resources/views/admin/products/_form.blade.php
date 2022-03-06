@push('css')
    <!-- select2 Styles -->
    <link href="{{asset('assets/admin/assets/plugins/select2/css/select2.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/assets/plugins/select2_old/css/select2-bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>
@endpush
<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3">Product Name
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="text" name="name"
                   value="{{ old('name', isset($product->name) ? $product->name : null ) }}"
                   class="form-control" required/>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">
            Type
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <select class="form-control select2" name="gender">
                <option selected="selected" value="">Please select</option>
                <option @if( old('gender', isset($product->gender) ? $product->gender : null) == 'male' ) selected
                        @endif value="male">Male
                </option>
                <option @if( old('gender', isset($product->gender) ? $product->gender : null) == 'female' ) selected
                        @endif value="female">Female
                </option>
            </select>
            @error('gender')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">
            Color
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <select class="form-control select2 " name="color">
                <option selected="selected" value="">Please select</option>
                @foreach($colors as $color)
                    <option @if(old('color',isset($product) ? $product->color_id : null) == $color->id) selected
                            @endif value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
            </select>
            @error('color')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">
            Size
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <select class="form-control select2 " name="size">
                <option selected="selected" value="">Please select</option>
                @foreach($sizes as $size)
                    <option @if(old('size',isset($product) ? $product->size_id : null) == $size->id) selected
                            @endif value="{{ $size->id }}">{{ $size->name }}</option>
                @endforeach
            </select>
            @error('size')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">Price
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="number" name="price" value="{{ old('price',isset($product->price) ? $product->price : null) }}"
                   class="form-control" required/>
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">Product Image
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <img id="output" width="150" src="{{ isset($product->image) ? asset($product->image) : null }}"/>
            <input type="file" accept="image/*" name="image" id="file"
                   onchange="loadFile(event)" style="display: none;">
            <h5><label for="file" style="cursor: pointer;font-weight: bold;">Upload Image</label></h5>
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
@push('js')
    <script src="{{asset('assets/admin/assets/plugins/select2/js/select2.js')}}"></script>
    <script src="{{asset('assets/admin/assets/plugins/select2/js/select2.full.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            $('.select2').select2()
        });
    </script>
    <script>
        var loadFile = function (event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endpush
