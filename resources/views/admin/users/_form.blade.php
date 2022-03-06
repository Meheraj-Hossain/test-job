<div class="form-body">
    <div class="form-group row">
        <label class="control-label col-md-3">User Name
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="text" name="user_name"
                   value="{{ old('user_name',isset($user->user_name) ? $user->user_name : null) }}"
                   class="form-control" required/>
            @error('user_name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">Email
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="email" name="email" value="{{ old('email',isset($user->email) ? $user->email : null) }}"
                   class="form-control" required/>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">City
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="text" name="city" value="{{ old('city',isset($user->city) ? $user->city : null) }}"
                   class="form-control" required/>
            @error('city')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">Country
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="text" name="country"
                   value="{{ old('country', isset($user->country) ? $user->country : null) }}"
                   class="form-control" required/>
            @error('country')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">Date of Birth
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="date" name="date_of_birth"
                   value="{{ old('date_of_birth', isset($user->date_of_birth) ? $user->date_of_birth : null) }}"
                   class="form-control" required/>
            @error('date_of_birth')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    @if(!isset($user))
        <div class="form-group row">
            <label class="control-label col-md-3">Password
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <input type="password" name="password" value="{{ old('password') }}"
                       class="form-control" required/>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <div class="form-group row">
            <label class="control-label col-md-3"> Retype password
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <input type="password" name="retype_password" value="{{ old('retype_password') }}"
                       class="form-control" required/>
                @error('retype_password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    @endif
    <div class="form-group row">
        <label class="control-label col-md-3"> Status
        </label>
        <div class="col-md-4">
            <input type="radio" name="status"
                   @if(old('status',isset($user->status) ? $user->status : null) == 'Active') checked
                   @endif value="Active">
            <label class="control-label">Active</label>
            <br>
            <input type="radio" name="status"
                   @if(old('status',isset($user->status) ? $user->status : null) == 'Inactive') checked
                   @endif value="Inactive">
            <label class="control-label">Inactive</label>
            @error('status')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
