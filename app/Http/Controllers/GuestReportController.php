<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GuestReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware(['auth', 'premium','profilecomplete','privacypolicy']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $guestdata = DB::table('guests')->where('hotel_id',$user_id)->get();

        
        return view('guestreport')->with('guestdata', $guestdata)->with('slno', 1);
    }
}
