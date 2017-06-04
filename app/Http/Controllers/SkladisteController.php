<?php

namespace iooa_proizvodni_is\Http\Controllers;

use iooa_proizvodni_is\Skladiste;
use Illuminate\Http\Request;

class SkladisteController extends Controller
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
        $skladista = Skladiste::all();
        error_log('Skladista = ' .$skladista);
        return view('skladista', ['skladista' => $skladista]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('skladiste');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skladiste = new Skladiste;
        $skladiste->naziv = $request->naziv;
        $skladiste->opis = $request->opis;
        $skladiste->proizvod_id = $request->proizvod_id;
        $skladiste->save();
        return redirect()->action('SkladisteController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \iooa_proizvodni_is\Skladiste  $skladiste
     * @return \Illuminate\Http\Response
     */
    public function show(Skladiste $skladiste, $id)
    {
        $skladiste = Skladiste::find($id);
        return view('skladiste', ['skladiste' => $skladiste]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \iooa_proizvodni_is\Skladiste  $skladiste
     * @return \Illuminate\Http\Response
     */
    public function edit(Skladiste $skladiste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \iooa_proizvodni_is\Skladiste  $skladiste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skladiste $skladiste)
    {
        
        $skladiste = Skladiste::find($request->id);
        $skladiste->naziv = $request->naziv;
        $skladiste->opis = $request->opis;
        $skladiste->proizvod_id = $request->proizvod_id;
        $skladiste->save();

        return redirect()->action('SkladisteController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \iooa_proizvodni_is\Skladiste  $skladiste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skladiste $skladiste)
    {
        //
    }
}
