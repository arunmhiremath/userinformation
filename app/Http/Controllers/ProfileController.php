<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }  


    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $id = auth()->user()->id;

        $request->validate([
            
            'comp_name'=>'required',
            'firstname'=>'required',
            'add_str'=>'required',
            'add_hno'=>'required',
            'add_pin'=>'required',
            'add_city'=>'required',
            'tel_number'=>'required'
            
        ]);

        $en_comp_name = encrypt($request->input('comp_name'));
        $en_firstname = encrypt($request->input('firstname'));
        $en_lastname = encrypt($request->input('lastname'));
        $en_add_str = encrypt($request->input('add_str'));
        $en_add_hno = encrypt($request->input('add_hno'));
        $en_add_pin = encrypt($request->input('add_pin'));
        $en_add_city = encrypt($request->input('add_city'));
        $en_add_extra = encrypt($request->input('add_extra'));
        $en_tel_number = encrypt($request->input('tel_number'));



        $user = User::find($id);
        $user->comp_name = $en_comp_name;
        $user->firstname = $en_firstname;
        $user->lastname = $en_lastname;
        $user->add_str = $en_add_str;
        $user->add_hno = $en_add_hno;
        $user->add_pin = $en_add_pin;
        $user->add_city = $en_add_city;
        $user->add_extra = $en_add_extra;
        $user->tel_number = $en_tel_number;
        $user->is_privacy_accepted = 1;
        $user->save();

        return Redirect::route('payment')->with('success', 'Information Saved');
        
    }
}
