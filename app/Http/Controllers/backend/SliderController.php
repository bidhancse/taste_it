<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class SliderController extends Controller
{
    
    public function slider()
    {
        return view('dashboard.slider.slider');
    }


    public function sliderinsert(Request $request)
    {

        $data = array(
            'title' => $request->title,
            'heading'    => $request->heading,
            'admin_id'  => Auth()->user()->id,
        );

        $Picture = $request->file('picture');

        if ($Picture)
        {
            $image_one_name= hexdec(uniqid()).'.'.$Picture->getClientOriginalExtension();
            Image::make($Picture)->save('public/image/sliderimage/'.$image_one_name,80);
            $data['picture']='public/image/sliderimage/'.$image_one_name;
            DB::table('sliderinformation')->insert($data);
        }

        else
        {
            DB::table('sliderinformation')->insert($data);
        }
        
    }


    public function manageslider()
    {
        $Data = DB::table('sliderinformation')->get();
        return view('dashboard.slider.manageslider', compact('Data'));
    }


    public function sliderdelete($id)
    {
        $check = DB::table('sliderinformation')->where('id',$id)->first();
        if (isset($check->picture)) 
        {
            unlink($check->picture);
            DB::table('sliderinformation')->where('id',$id)->delete();
        }

        else
        {
            DB::table('sliderinformation')->where('id',$id)->delete();
        }
    }


    public function editslider($id)
    {
        $Data = DB::table('sliderinformation')->where('id',$id)->first();
        return view('dashboard.slider.updateslider',compact('Data'));
    }


    public function updateslider(Request $request, $id)
    {
        $data = array(
            'title' => $request->title,
            'heading'    => $request->heading,
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
            Image::make($Picture)->save('public/image/sliderimage/'.$image_one_name,80);
            $data['picture']='public/image/sliderimage/'.$image_one_name;
            DB::table('sliderinformation')->where('id',$id)->update($data);

        }   

        else
        {
            DB::table('sliderinformation')->where('id',$id)->update($data);
        }
    }


}
