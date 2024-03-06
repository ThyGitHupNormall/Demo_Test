<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['title']="List All User";
        $data['users']=User::all();
        // dd($data['users']);
        return view('admin.user.index',$data);
    }
    public function view()
    {
        $data['user']=User::all();
        // dd($data['users']);
        return view('layouts.admin.partials.admin-left-sidebar',$data);
    }
    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'user_type'=>'required',
            'avatar'=>'required |image|mimes:jpg,png,gif,jpeg|max:2048',
        ]);

        $user = new User();
        $user -> name = $request->name;
        $user -> email = $request->email;
        $user -> password = $request->password;
        $user -> type = $request->user_type;

        $avatar = $request->file('avatar')->extension();
        $fileName = date ('YmdHis').'.'.$avatar;
        $request ->file('avatar')->move(public_path('uploads/user/image/'),$fileName);

        $user->avatar =$fileName ;

        $user->save() ;

        // dd($user);

        return redirect()->route('admin.user');

    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.user.edit', compact('user'));

    }

    public function update($id,Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'user_type'=>'required',
            'avatar'=>'required |image|mimes:jpg,png,gif,jpeg|max:2048',
        ]);

        $user = User::where('id',$id)->first();

        if($request->hasFile('avatar'))
        {
            $request->validate([
                'avatar'=>'required |image|mimes:jpg,png,gif,jpeg|max:2048',
            ]);
            if (file_exists(public_path('uploads/user/image/'.$user->avatar)) AND !empty($user->avatar)) {
                unlink(public_path('uploads/user/image/'.$user->avatar));

            }
            $avatar = $request->file('avatar')->extension();
            $fileName = date ('YmdHis').'.'.$avatar;
            $request ->file('avatar')->move(public_path('uploads/user/image/'),$fileName);

        }

        $user -> name = $request->name;
        $user -> email = $request->email;
        $user -> password = $request->password;
        $user -> type = $request->user_type;

        $user->avatar =$fileName ;

        $user->save() ;

        // dd($user);

        return redirect()->route('admin.user');

    }

    public function delete($id)
    {
        $user = User::where('id',$id)->first();
        if (file_exists(public_path('uploads/user/image/'.$user->avatar)) AND !empty($user->avatar)) {
            unlink(public_path('uploads/user/image/'.$user->avatar));
        }

        $user->delete() ;

        return redirect()->route('admin.user');
    }

    public function Read($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.user.view', compact('user'));

    }


}
