<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {
        $data['title']="List All Explore";
        $data['explores']=Items::all();
        // dd($data['explores']);
        return view('admin.explore.index',$data);
    }

    public function create()
    {
        return view('admin.explore.create');
    }

    public function store(Request $request)
    {
        $explore = new Items();
        $explore -> title = $request->title;
        $explore -> username = $request->user_name;
        $explore -> description = $request->description;
        $explore -> price = $request->price;
        $explore -> date = $request->date;
        $explore -> current_bid= $request->current_bid;
        $explore -> end_in = $request->end_in;


        if ($request->hasfile('profile')) {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move(public_path('uploads/explore/'), $filename);
            $explore->img_profile = $filename;
        } else {
            $explore->img_profile = '';
        }

        $explore->save();
        if ($request->hasfile('item')) {
            $file = $request->file('item');
            $extension = $file->getClientOriginalExtension();
            $filename = date ('YmdHis').'.'.$extension;
            $file->move(public_path('uploads/explore/'), $filename);
            $explore->img = $filename;
        } else {
            $explore->img = '';
        }
    //    dd($explore);
        $explore->save();



        return redirect()->route('admin.explore');

    }

    public function edit($id)
    {
        $explore = Items::where('id',$id)->first();
        return view('admin.explore.edit', compact('explore'));

    }

    public function update(Request $request, $id)
    {
        $explore = Items::where('id',$id)->first();
        $explore -> title = $request->title;
        $explore -> username = $request->user_name;
        $explore -> description = $request->description;
        $explore -> price = $request->price;
        $explore -> date = $request->date;
        $explore -> current_bid= $request->current_bid;
        $explore -> end_in = $request->end_in;


        if ($request->hasfile('profile')) {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move(public_path('uploads/explore/'), $filename);
            $explore->img_profile = $filename;
        } else {
            $explore->img_profile = '';
        }

        $explore->save();
        if ($request->hasfile('item')) {
            $file = $request->file('item');
            $extension = $file->getClientOriginalExtension();
            $filename = date ('YmdHis').'.'.$extension;
            $file->move(public_path('uploads/explore/'), $filename);
            $explore->img = $filename;
        } else {
            $explore->img = '';
        }
    //    dd($explore);
        $explore->update();



        return redirect()->route('admin.explore');


    }
    public function delete($id)
    {
        $explore = Items::where('id',$id)->first();
        if (file_exists(public_path('uploads/explore/'.$explore->img_profile) && public_path('uploads/explore/'.$explore->img)) AND !empty($explore->img_profile)) {
            unlink(public_path('uploads/explore/'.$explore->img_profile));
            unlink(public_path('uploads/explore/'.$explore->img));
        }

        $explore->delete() ;

        return redirect()->route('admin.explore');
    }


}
