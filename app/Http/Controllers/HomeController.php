<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->rolesAutorizados(['Admin','User']);
        /*if ($request->user()->tieneRole('Admin')) {
            return view('homeAdmin');
        } else if ($request->user()->tieneRole('User')) {
            return view('home');
        }*/
        return view('home');
    }
}
