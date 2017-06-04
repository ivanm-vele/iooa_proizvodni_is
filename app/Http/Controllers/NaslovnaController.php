<?php

namespace iooa_proizvodni_is\Http\Controllers;

use Illuminate\Http\Request;

class NaslovnaController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('izbornik');
    }
}
