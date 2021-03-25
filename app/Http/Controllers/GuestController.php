<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function register(Request $request)
    {
        //validation
        $request->validate([
            'hotel_id'=>'required',
            'guest_firstname'=>'required',
            'guest_lastname'=>'required',
            'guest_add_str'=>'required',
            'guest_add_hno'=>'required',
            'guest_add_pin'=>'required',
            'guest_add_city'=>'required',
            'guest_add_extra'=>'required',
            'guest_tel_number'=>'required',
            
        ]);

        
        $guest = new Guest;
        $guest->hotel_id = $request->input('hotel_id');
        $guest->guest_firstname = $request->input('guest_firstname');
        $guest->guest_lastname = $request->input('guest_lastname');
        $guest->guest_add_str = $request->input('guest_add_str');
        $guest->guest_add_hno = $request->input('guest_add_hno');
        $guest->guest_add_pin = $request->input('guest_add_pin');
        $guest->guest_add_city = $request->input('guest_add_city');
        $guest->guest_add_extra = $request->input('guest_add_extra');
        $guest->guest_tel_number = $request->input('guest_tel_number');
        $guest->guest_visit_date = today();
        $guest->guest_visit_time = now();
        $guest->guest_total = $request->input('guest_total');
        $guest->save();

        if(!$guest)
        {
            return response()->json(['success' => 'false', 'message' => "Not able to Register your visit!"]);
        }
        else
        {
            return response()->json(['success' => 'false', 'message' => 'Rigistered!']);
        }
    }
}
