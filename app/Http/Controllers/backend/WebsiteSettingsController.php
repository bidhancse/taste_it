<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class WebsiteSettingsController extends Controller
{
   
    public function settings()
    {
        $Data = DB::table('settingsinformation')->first();
        return view('dashboard.websitesettings.settings', compact('Data'));
    }


    public function settingsupdate(Request $request, $id)
    {

        $data = array(
            'title'     => $request->title,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'facebook'  => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'admin_id'  => Auth()->user()->id,
        );

        $Favicon = $request->file('favicon');
        $Logo = $request->file('logo');
        $oldimage = DB::table('settingsinformation')->first();


        if ($Logo) {
            if ($oldimage->logo) {
                unlink($oldimage->logo);
            }

            $image_one_name= hexdec(uniqid()).'.'.$Logo->getClientOriginalExtension();
            Image::make($Logo)->save('public/image/settingimage/'.$image_one_name,80);
            $data['logo']='public/image/settingimage/'.$image_one_name;
            DB::table('settingsinformation')->where('id',$id)->update($data);
        }

        else{
            DB::table('settingsinformation')->where('id',$id)->update($data);
        }

        if ($Favicon) {
            if ($oldimage->favicon) {
                unlink($oldimage->favicon);
            }

            $image_one_name= hexdec(uniqid()).'.'.$Favicon->getClientOriginalExtension();
            Image::make($Favicon)->save('public/image/settingimage/'.$image_one_name,80);
            $data['favicon']='public/image/settingimage/'.$image_one_name;
            DB::table('settingsinformation')->where('id',$id)->update($data);
        }

        else{
            DB::table('settingsinformation')->where('id',$id)->update($data);
        }
    }


    public function contact()
    {
        $Data = DB::table('contactinformation')->first();
        return view('dashboard.websitesettings.contact', compact('Data'));
    }


    public function contactupdate(Request $request, $id)
    {
        $Data = array(
            'contact_details' => $request->contact_details,
            'admin_id' => Auth()->user()->id,
        );

        DB::table('contactinformation')->where('id',$id)->update($Data);
    }


}
