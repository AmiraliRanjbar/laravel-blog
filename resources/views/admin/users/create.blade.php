@extends('admin.layouts.master')


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h4 class="card-title">ایجاد کاربر</h4>
                <form method="POST" action="{{route('admin.user.store')}}">
{{--                    <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
                    @csrf
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">نام:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left"  dir="rtl" name="name">
                        </div>
                        @error('name')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">نام خانوادگی:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left"  dir="rtl" name="family">
                        </div>
                        @error('family')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">ایمیل</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" dir="rtl" name="email" >
                        </div>
                        @error('email')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">پسورد</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" dir="rtl" name="password">
                        </div>
                        @error('password')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-success btn-uppercase">
                            <i class="ti-check-box m-r-5"></i> ذخیره
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
