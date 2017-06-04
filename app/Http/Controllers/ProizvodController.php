<?php

namespace iooa_proizvodni_is\Http\Controllers;

use iooa_proizvodni_is\Proizvod;
use Illuminate\Http\Request;

class ProizvodController extends Controller
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
        $proizvodi = Proizvod::all();
        return view('proizvodi', ['proizvodi' => $proizvodi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proizvod');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proizvod = new Proizvod;
        $proizvod->naziv = $request->naziv;
        $proizvod->opis = $request->opis;
        $proizvod->proizvod_id = $request->proizvod_id;
        $proizvod->save();
        return redirect()->action('ProizvodController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \iooa_proizvodni_is\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function show(Proizvod $proizvod, $id)
    {
        $proizvod = Proizvod::find($id);
        return view('proizvod', ['proizvod' => $proizvod]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \iooa_proizvodni_is\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function edit(Proizvod $proizvod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \iooa_proizvodni_is\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proizvod $proizvod)
    {
        
        $proizvod = Proizvod::find($request->id);
        $proizvod->naziv = $request->naziv;
        $proizvod->opis = $request->opis;
        $proizvod->proizvod_id = $request->proizvod_id;
        $proizvod->save();

        return redirect()->action('ProizvodController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \iooa_proizvodni_is\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proizvod $proizvod)
    {
        //
    }
}
