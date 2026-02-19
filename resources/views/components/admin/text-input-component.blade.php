<div class="form-group row">
    <label  class="col-sm-2 col-form-label">{{ $label }}</label>
    <div class="col-sm-10">
        <input type="text" class="form-control text-left"  dir="rtl" name="name" value="{{old('name')}}">
    </div>
    @error('name')
    <p style="color: red">{{$message}}</p>
    @enderror
</div>
