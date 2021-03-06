<?php

namespace iooa_proizvodni_is\Http\Controllers;

use iooa_proizvodni_is\Stroj;
use iooa_proizvodni_is\Proizvod;
use Illuminate\Http\Request;

class StrojController extends Controller
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
        $strojevi = Stroj::all();
        error_log('Strojevi = ' .$strojevi);
        return view('strojevi', ['strojevi' => $strojevi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proizvodi = Proizvod::all();
        return view('stroj', ['proizvodi' => $proizvodi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stroj = new Stroj;
        $stroj->naziv = $request->naziv;
        $stroj->opis = $request->opis;
        $stroj->proizvod_id = $request->proizvod_id;
        $stroj->save();
        return redirect()->action('StrojController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \iooa_proizvodni_is\Stroj  $stroj
     * @return \Illuminate\Http\Response
     */
    public function show(Stroj $stroj, $id)
    {
        $stroj = Stroj::find($id);
        $proizvodi = Proizvod::all();
        return view('stroj', ['stroj' => $stroj, 'proizvodi' => $proizvodi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \iooa_proizvodni_is\Stroj  $stroj
     * @return \Illuminate\Http\Response
     */
    public function edit(Stroj $stroj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \iooa_proizvodni_is\Stroj  $stroj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stroj $stroj)
    {
        
        $stroj = Stroj::find($request->id);
        $stroj->naziv = $request->naziv;
        $stroj->opis = $request->opis;
        $stroj->proizvod_id = $request->proizvod_id;
        $stroj->save();

        return redirect()->action('StrojController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \iooa_proizvodni_is\Stroj  $stroj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stroj $stroj)
    {
        //
    }
}
