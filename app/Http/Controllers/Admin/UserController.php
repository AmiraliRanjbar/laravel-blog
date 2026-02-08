<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //Query Builder
        //  $users = DB::table('users')->get();
        //Eloquent
        $users = User::query()->userStatus(UserStatus::Active->value)->get();
        return view('admin.users.index', compact('users'));
    }

    public function deletedUsers()
    {
        $users = User::query()->onlyTrashed()->get();
        return view('admin.users.deleted_users', compact('users'));
    }

    public function restoreUser($id)
    {
        $user = User::query()->onlyTrashed()->findOrFail($id);
        $user->restore();

        $users = User::query()->onlyTrashed()->get();

        return view('admin.users.deleted_users', [
            'users'=>$users,
        ]);
    }

    public function hardDeleteUser($id)
    {
        $user = User::query()->onlyTrashed()->findOrFail($id);
        $user->forceDelete();

        $users = User::query()->onlyTrashed()->get();

        return view('admin.users.deleted_users', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6',
        ]);

        $data = $request->all();

        $data['password'] = Hash::make($request->password);

        User::query()->create($data);

        //Eloquent
//        User::query()->create([
//            'name'=> $request->name,
//            'email'=>$request->email,
//            'password'=>Hash::make($request->password),
//        ]);
        //بعد از ثبت نام یک صفحه دیگه بره

            return redirect()
                ->route('admin.users.index')
                ->with('createalert' , 'کاربر با موفقیت ایجاد شد');

        //Query Builder
       // DB::table('users')->insert([
       // 'name' => $request->name,
       // 'email' => $request->email,
       // 'password' => Hash::make($request->password),
       // ]);

        //بعد از ثبت نام یک صفحه دیگه بره
//        return redirect('/admin/users'); //1
//        return redirect()->back();


//        dd($request->input('email', 'default'));
        //Raw SQL Query
    }

    public function edit($id)
    {
//        $user = DB::table('users')->where('id' , $id)->first();
//        $user = DB::table('users')->find($id);
        //Eloquent
        $user = User::query()->find($id);
        return view('admin.users.edit' , compact('user'));

    }

    public function update(Request $request, $id)
    {
        //Eloquent
        $user = User::query()->find($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password ? Hash::make($request->password) : $user->password,
        ]);
        return redirect()->route('admin.users.index')->with('message' , 'کاربر با موفقیت ویرایش شد');

        //Query Builder
//        $user = DB::table('users')->find($id);
//        DB::table('users')->where('id', $id)->update([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => $request->password ? Hash::make($request->password) : $user->password,
//        ]);
    }
    public function destroy($id)
    {
        //Eloquent
        //User::query()->where('id', $id)->delete();
        //User::query()->find($id)->delete();
        User::destroy($id);

        //Query Builder
//        DB::table('users')->where('id' , $id)->delete();
        return redirect()->route('admin.users.index');
    }
}
