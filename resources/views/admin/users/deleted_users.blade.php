@extends('admin.layouts.master')


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table overflow-auto" tabindex="8">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" wire:model="search">
                    </div>
                </div>
                <!--Create ALert-->
                <p style="font-size: 18px;font-weight: bold">لیست کاربران</p>
                @if(session()->has('createalert'))
                    <div style="background-color: green;width: 300px; padding:2px">
                        <p style="color: white">{{session('createalert')}}</p>
                    </div>
                @endif
                <!--Update ALert-->
                @if(session()->has('message'))
                    <div style="background-color: green;width: 300px; padding:2px">
                        <p style="color: white">{{session('message')}}</p>
                    </div>
                @endif
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center align-middle text-primary">ردیف</th>
                        <th class="text-center align-middle text-primary">نام و نام خانوادگی</th>
                        <th class="text-center align-middle text-primary">ایمیل</th>
                        <th class="text-center align-middle text-primary">تاریخ ایجاد</th>
                        <th class="text-center align-middle text-primary">بازنشانی</th>
                        <th class="text-center align-middle text-primary">حذف</th>

                    </tr>
                    </thead>
                    <tbody>

                @foreach($users as $user)
                    <tr>
                        <td class="text-center align-middle">{{$user->id}}</td>
                        <td class="text-center align-middle">{{$user->name}}</td>
                        <td class="text-center align-middle">{{$user->email}}</td>
                        <td class="text-center align-middle">{{$user->created_at}}</td>
                        <td class="text-center align-middle">
                            <form action="{{route('admin.user.restore', $user->id)}}" method="POST">
                                @method('PUT')
                                @csrf
                                <input type="submit" class="btn btn-outline-primary" value="بازنشانی کاربر">
                            </form>
                        </td>
                        <td class="text-center align-middle">
                            <form action="{{route('admin.user.hard_delete', $user->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-outline-danger" value="حذف">
                            </form>
                        </td>
                    </tr>
                @endforeach
                <div style="margin: 40px !important;"
                     class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                </div>
                </table>
            </div>
        </div>
    </div>
@endsection
