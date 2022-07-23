<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class AboutController extends Controller
{
    public function about()
    {
        $Data = DB::table('aboutinformation')->first();
        return view('dashboard.about.about', compact('Data'));
    }


    public function updateabout(Request $request, $id)
    {

        $data = array(
            'admin_id'  => Auth()->user()->id,
            'description' => $request->description,
        );

        $Picture = $request->file('picture');
        $old_image = $request->old_image;

        if ($Picture) {
            if ($old_image) {
                unlink($old_image);
            }

            $image_one_name= hexdec(uniqid()).'.'.$Picture->getClientOriginalExtension();
            Image::make($Picture)->save('public/image/aboutimage/'.$image_one_name,100);
            $data['picture']='public/image/aboutimage/'.$image_one_name;
            DB::table('aboutinformation')->where('id',$id)->update($data);
        }

        else{
            DB::table('aboutinformation')->where('id',$id)->update($data);
        }

    }

}
