<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ReservationController extends Controller
{
    
    public function reservation()
    {
        $Data = DB::table('tablebookinformation')->get();
        return view('dashboard.reservation.reservation', compact('Data'));
    }


    public function reservationdelete($id)
    {
        DB::table('tablebookinformation')->where('id',$id)->delete();
    }


}
