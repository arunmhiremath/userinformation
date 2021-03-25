<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremiumPlanController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','profilecomplete','privacypolicy']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
                
        return view('premiumplans');
    }
}
