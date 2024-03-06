<?php

namespace App\Http\Controllers;

use App\Models\HomeHeading;
use App\Models\Items;
use Illuminate\Http\Request;

class HomeHeadingController extends Controller
{
    public function index()
    {
        $data['title']="List All Explore";
        $data['home_heading']=HomeHeading::all();
        // dd($data['explores']);
        return view('admin.home-heading.index',$data);
    }
    public function edit($id){
        $home_heading = HomeHeading::find($id);
        return view('admin.home-heading.edit', compact ('home_heading'));

    }
    public function update(Request $request, $id)
    {
        $home_heading = HomeHeading::find($id);
        $home_heading->title = $request->title;
        $home_heading->description = $request->description;
        $home_heading->update();
        return redirect()->route('admin.home-heading');
    }
    // public function create()
    // {
    //     return view('admin.explore.create');
    // }

    // public function store(Request $request)
    // {
    //     $explore = new Items();
    //     $explore -> title = $request->title;
    //     $explore -> username = $request->user_name;
    //     $explore -> description = $request->description;
    //     $explore -> price = $request->price;
    //     $explore -> date = $request->date;
    //     $explore -> current_bid= $request->current_bit;
    //     $explore -> end_in = $request->end_in;


    //     if ($request->hasfile('profile')) {
    //         $file = $request->file('profile');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extension;
    //         $file->move(public_path('uploads/explore/'), $filename);
    //         $explore->img_profile = $filename;
    //     } else {
    //         $explore->img_profile = '';
    //     }

    //     $explore->save();
    //     if ($request->hasfile('item')) {
    //         $file = $request->file('item');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = date ('YmdHis').'.'.$extension;
    //         $file->move(public_path('uploads/explore/'), $filename);
    //         $explore->img = $filename;
    //     } else {
    //         $explore->img = '';
    //     }
    // //    dd($explore);
    //     $explore->save();



    //     return redirect()->route('admin.explore');

    // }

    // public function edit($id)
    // {
    //     $user = Items::where('id',$id)->first();
    //     return view('admin.explore.edit', compact('user'));

    // }
}
