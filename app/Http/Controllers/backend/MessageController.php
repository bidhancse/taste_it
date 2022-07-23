<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class MessageController extends Controller
{


    public function message()
    {
        $Data = DB::table('customermessage')->get();
        return view('dashboard.message.message', compact('Data'));
    }


    public function messagedelete($id)
    {
        DB::table('customermessage')->where('id',$id)->delete();
    }
}
