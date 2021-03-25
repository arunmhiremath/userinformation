<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PrivacyPolicyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('privacy-policy');
    }

    public function accept(Request $request)
    {

        $id = auth()->user()->id;

        $user = User::find($id);
        $user->is_privacy_accepted = 1;
        $user->save();

        return view('/profile');
    }
}
