<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class MenuController extends Controller
{

    public function menu()
    {
        return view('dashboard.menu.menu');
    }


    public function menuinsert(Request $request)
    {
        $data = array(
            'food_name' => $request->food_name,
            'food_category'    => $request->food_category,
            'food_details' => $request->food_details,
            'price'    => $request->price,
            'admin_id'  => Auth()->user()->id,
        );

        $Picture = $request->file('picture');

        if ($Picture)
        {
            $image_one_name= hexdec(uniqid()).'.'.$Picture->getClientOriginalExtension();
            Image::make($Picture)->save('public/image/menuimage/'.$image_one_name,80);
            $data['picture']='public/image/menuimage/'.$image_one_name;
            DB::table('menuinformation')->insert($data);
        }

        else
        {
            DB::table('menuinformation')->insert($data);
        }
    }


    public function managemenu()
    {
        $Data = DB::table('menuinformation')->get();
        return view('dashboard.menu.managemenu', compact('Data'));
    }


    public function menudelete($id)
    {
        $check = DB::table('menuinformation')->where('id',$id)->first();
        if (isset($check->picture)) 
        {
            unlink($check->picture);
            DB::table('menuinformation')->where('id',$id)->delete();
        }

        else
        {
            DB::table('menuinformation')->where('id',$id)->delete();
        }
    }


    public function editmenu($id)
    {
        $Data = DB::table('menuinformation')->where('id',$id)->first();
        return view('dashboard.menu.updatemenu',compact('Data'));
    }


    public function updatemenu(Request $request, $id)
    {
        $data = array(
            'food_name' => $request->food_name,
            'food_category'    => $request->food_category,
            'food_details' => $request->food_details,
            'price'    => $request->price,
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
            Image::make($Picture)->save('public/image/menuimage/'.$image_one_name,80);
            $data['picture']='public/image/menuimage/'.$image_one_name;
            DB::table('menuinformation')->where('id',$id)->update($data);

        }   

        else
        {
            DB::table('menuinformation')->where('id',$id)->update($data);
        }
    }

}
