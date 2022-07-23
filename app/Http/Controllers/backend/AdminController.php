<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use Hash;

class AdminController extends Controller
{
    
    public function user()
    {
        return view('dashboard.user.user');
    }


    public function createuser(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email'    => $request->email,
            'phone' => $request->phone,
            'password'    => Hash::make($request->password),
            'status' => $request->status,
            'admin_id'  => Auth()->user()->id,
        );

        $Picture = $request->file('picture');

        if ($Picture)
        {
            $image_one_name= hexdec(uniqid()).'.'.$Picture->getClientOriginalExtension();
            Image::make($Picture)->save('public/image/userimage/'.$image_one_name,80);
            $data['picture']='public/image/userimage/'.$image_one_name;
            DB::table('users')->insert($data);
        }

        else
        {
            DB::table('users')->insert($data);
        }
    }


    public function manageuser()
    {
        $Data = DB::table('users')->get();
        return view('dashboard.user.manageuser', compact('Data'));
    }


    public function changestatus(Request $request, $id)
    {
        $data=DB::table('users')->where('id',$id)->first();
        if($data->status == 0)
            DB::table('users')->where('id',$id)->update(['status' => 1]); 
        else
            DB::table('users')->where('id',$id)->update(['status' => 0]); 

        return response()->json();
    }


    public function userdelete($id)
    {
        $check = DB::table('users')->where('id',$id)->first();
        if (isset($check->picture)) 
        {
            unlink($check->picture);
            DB::table('users')->where('id',$id)->delete();
        }

        else
        {
            DB::table('users')->where('id',$id)->delete();
        }
    }


    public function edituser($id)
    {
        $Data = DB::table('users')->where('id',$id)->first();
        return view('dashboard.user.updateuser', compact('Data'));
    }


    public function updateuser(Request $request, $id)
    {
        $data = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'status'    => $request->status,
            'admin_id'  => Auth()->user()->id,
        );

        $Picture = $request->file('picture');
        $old_image = $request->old_image;

        if ($Picture) 
        {
            if ($old_image) 
            {
                unlink($old_image);
            }
            $image_one_name= hexdec(uniqid()).'.'.$Picture->getClientOriginalExtension();
            Image::make($Picture)->save('public/image/userimage/'.$image_one_name,80);
            $data['picture']='public/image/userimage/'.$image_one_name;
            DB::table('users')->where('id',$id)->update($data);

        }   

        else
        {
            DB::table('users')->where('id',$id)->update($data);
        }
    }


}
