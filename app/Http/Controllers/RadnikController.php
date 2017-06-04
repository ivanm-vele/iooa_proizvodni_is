<?php

namespace iooa_proizvodni_is\Http\Controllers;

use iooa_proizvodni_is\Radnik;
use Illuminate\Http\Request;

class RadnikController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $radnici = Radnik::all();
        error_log('Radnici = ' .$radnici);
        return view('radnici', ['radnici' => $radnici]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('radnik');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $radnik = new Radnik;
        $radnik->ime = $request->ime;
        $radnik->prezime = $request->prezime;
        $radnik->uloga = $request->uloga;
        $radnik->save();
        return redirect()->action('RadnikController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \iooa_radnici_is\Radnik  $radnik
     * @return \Illuminate\Http\Response
     */
    public function show(Radnik $radnik, $id)
    {
        $radnik = Radnik::find($id);
        return view('radnik', ['radnik' => $radnik]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \iooa_radnici_is\Radnik  $radnik
     * @return \Illuminate\Http\Response
     */
    public function edit(Radnik $radnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \iooa_radnici_is\Radnik  $radnik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Radnik $radnik)
    {
        
        $radnik = Radnik::find($request->id);
        $radnik->ime = $request->ime;
        $radnik->prezime = $request->prezime;
        $radnik->uloga = $request->uloga;
        $radnik->save();

        return redirect()->action('RadnikController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \iooa_radnici_is\Radnik  $radnik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Radnik $radnik)
    {
        //
    }
}
