@extends('admin.layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h4 class="card-title">ایجاد کاربر</h4>
                @include('admin.layouts.partials.errors')
                <form method="POST" action="{{route('admin.user.store')}}">
{{--                    <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
                    @csrf
                    @php
                    $title = 'Data1';
                    @endphp
                    <x-admin.text-input-component label="نام" name="name" :text="$title"/>
                    <x-admin.text-input-component label="نام خانوادگی" name="family" />
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">ایمیل</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" dir="rtl" name="email" value="{{old('email')}}">
                        </div>
                        @error('email')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">موبایل</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" dir="rtl" name="mobile" value="{{old('mobile')}}">
                        </div>
                        @error('mobile')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">پسورد</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" dir="rtl" name="password" value="{{old('password')}}">
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
