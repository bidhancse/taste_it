<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class ChefController extends Controller
{
    
    public function chef()
    {
        return view('dashboard.chef.chef');
    }


    public function chefinsert(Request $request)
    {
        $data = array(
            'chef_name' => $request->chef_name,
            'position'    => $request->position,
            'facebook' => $request->facebook,
            'instagram'    => $request->instagram,
            'twitter' => $request->twitter,
            'linkedin'    => $request->linkedin,
            'admin_id'  => Auth()->user()->id,
        );

        $Picture = $request->file('picture');

        if ($Picture)
        {
            $image_one_name= hexdec(uniqid()).'.'.$Picture->getClientOriginalExtension();
            Image::make($Picture)->save('public/image/chefimage/'.$image_one_name,80);
            $data['picture']='public/image/chefimage/'.$image_one_name;
            DB::table('chefinformation')->insert($data);
        }

        else
        {
            DB::table('chefinformation')->insert($data);
        }
    }


    public function managechef()
    {
        $Data = DB::table('chefinformation')->get();
        return view('dashboard.chef.managechef', compact('Data'));
    }


    public function chefdelete($id)
    {
        $check = DB::table('chefinformation')->where('id',$id)->first();
        if (isset($check->picture)) 
        {
            unlink($check->picture);
            DB::table('chefinformation')->where('id',$id)->delete();
        }

        else
        {
            DB::table('chefinformation')->where('id',$id)->delete();
        }
    }


    public function editchef($id)
    {
        $Data = DB::table('chefinformation')->where('id',$id)->first();
        return view('dashboard.chef.updatechef',compact('Data'));
    }


    public function updatechef(Request $request, $id)
    {
        $data = array(
            'chef_name' => $request->chef_name,
            'position'    => $request->position,
            'facebook' => $request->facebook,
            'instagram'    => $request->instagram,
            'twitter' => $request->twitter,
            'linkedin'    => $request->linkedin,
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
            Image::make($Picture)->save('public/image/chefimage/'.$image_one_name,80);
            $data['picture']='public/image/chefimage/'.$image_one_name;
            DB::table('chefinformation')->where('id',$id)->update($data);

        }   

        else
        {
            DB::table('chefinformation')->where('id',$id)->update($data);
        }
    }


    


}
