<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3">Product color name
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="text" name="name"
                   value="{{ old('name',isset($color->name) ? $color->name : null) }}"
                   class="form-control" required/>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">Product color details
        </label>
        <div class="col-md-4">
            <textarea name="details" id="" class="form-control" cols="61" rows="2"
                      style="resize: none">{{ old('details',isset($color->details) ? $color->details : null) }}</textarea>
            @error('details')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    @if(isset($color))
        <div class="form-group row">
            <label class="control-label col-md-3"> Status
            </label>
            <div class="col-md-4">
                <input type="radio" name="status"
                       @if(old('status',isset($color->status) ? $color->status : null) == 'Active') checked
                       @endif value="Active">
                <label class="control-label">Active</label>
                <br>
                <input type="radio" name="status"
                       @if(old('status',isset($color->status) ? $color->status : null) == 'Inactive') checked
                       @endif value="Inactive">
                <label class="control-label">Inactive</label>
                @error('status')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    @endif
</div>
