<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        return view('front_end.pages.download');
    }

    public function getAllImages()
    {
        
    }

    public function approveImage(Request $request)
    {

    }

    public function markAsWinnner(Request $request)
    {

    }

}
