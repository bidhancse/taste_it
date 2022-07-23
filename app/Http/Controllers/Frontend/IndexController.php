<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    

    public function index()
    {
        $Slider = DB::table('sliderinformation')->get();
        $About = DB::table('aboutinformation')->first();
        $MenuBreakfast = DB::table('menuinformation')->where('food_category', 1)->get();
        $MenuLunch = DB::table('menuinformation')->where('food_category', 2)->get();
        $MenuDinner = DB::table('menuinformation')->where('food_category', 3)->get();
        $MenuDisserts = DB::table('menuinformation')->where('food_category', 4)->get();
        $MenuCoffee = DB::table('menuinformation')->where('food_category', 5)->get();
        $MenuDrinks = DB::table('menuinformation')->where('food_category', 6)->get();
        $Chef = DB::table('chefinformation')->get();
        return view('frontend.home', compact('Slider','About','MenuBreakfast','MenuLunch','MenuDinner','MenuDisserts','MenuCoffee','MenuDrinks','Chef'));
    }


    public function about()
    {
        $About = DB::table('aboutinformation')->first();
        return view('frontend.pages.about', compact('About'));
    }


    public function chef()
    {
        $About = DB::table('aboutinformation')->first();
        $Chef = DB::table('chefinformation')->get();
        return view('frontend.pages.chef', compact('Chef','About'));
    }


    public function menu()
    {
        $MenuBreakfast = DB::table('menuinformation')->where('food_category', 1)->get();
        $MenuLunch = DB::table('menuinformation')->where('food_category', 2)->get();
        $MenuDinner = DB::table('menuinformation')->where('food_category', 3)->get();
        $MenuDisserts = DB::table('menuinformation')->where('food_category', 4)->get();
        $MenuCoffee = DB::table('menuinformation')->where('food_category', 5)->get();
        $MenuDrinks = DB::table('menuinformation')->where('food_category', 6)->get();
        return view('frontend.pages.menu', compact('MenuBreakfast','MenuLunch','MenuDinner','MenuDisserts','MenuCoffee','MenuDrinks'));
    }


    public function reservation()
    {
        return view('frontend.pages.reservation');
    }


    public function contact()
    {
        $Settings = DB::table('settingsinformation')->first();
        $Contact = DB::table('contactinformation')->first();
        return view('frontend.pages.contact', compact('Settings','Contact'));
    }


    public function tablebook(Request $request)
    {
        $data = array(
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'date'          => $request->date,
            'time'         => $request->time,
            'table_number'         => $request->table_number,
        );

        DB::table('tablebookinformation')->insert($data);

        return Redirect()->back()->with('message','Table Book Successfully Done');
    }


    public function customermessage(Request $request)
    {
        $data = array(
            'name'          => $request->name,
            'email'         => $request->email,
            'subject'         => $request->subject,
            'message'          => $request->message,
        );

        DB::table('customermessage')->insert($data);

        return Redirect()->back()->with('message','Message Send Successfully Done');
    }


}
