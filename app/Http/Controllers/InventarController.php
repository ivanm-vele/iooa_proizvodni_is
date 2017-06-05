<?php

namespace iooa_proizvodni_is\Http\Controllers;

use iooa_proizvodni_is\Inventar;
use iooa_proizvodni_is\InventarRadnja;
use iooa_proizvodni_is\Proizvod;
use iooa_proizvodni_is\Skladiste;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class InventarController extends Controller
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

        $inventari = Inventar::all();
        return view('inventari', ['inventari' => $inventari]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $radnje_inventara = InventarRadnja::all();
        $skladista = Skladiste::all();
        $proizvodi = Proizvod::all();
        return view('inventar', ['radnje_inventara' => $radnje_inventara, 'skladista' => $skladista, 'proizvodi' => $proizvodi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventar = new Inventar;
        $inventar->broj_komada = $request->broj_komada;
        $inventar->skladiste_id = $request->skladiste_id;
        $inventar->proizvod_id = $request->proizvod_id;
        $inventar->inventar_radnja_id = $request->inventar_radnja_id;
        $inventar->user_id = Auth::id();
        $inventar->save();
        return redirect()->action('InventarController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \iooa_proizvodni_is\Inventar  $inventar
     * @return \Illuminate\Http\Response
     */
    public function show(Inventar $inventar, $id)
    {
        $inventar = Inventar::find($id);
        $radnje_inventara = InventarRadnja::all();
        $skladista = Skladiste::all();
        $proizvodi = Proizvod::all();
        return view('inventar', ['inventar' => $inventar, 'radnje_inventara' => $radnje_inventara, 'skladista' => $skladista, 'proizvodi' => $proizvodi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \iooa_proizvodni_is\Inventar  $inventar
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventar $inventar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \iooa_proizvodni_is\Inventar  $inventar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventar $inventar)
    {
        
        $inventar = Inventar::find($request->id);
        $inventar->broj_komada = $request->broj_komada;
        $inventar->skladiste_id = $request->skladiste_id;
        $inventar->proizvod_id = $request->proizvod_id;
        $inventar->inventar_radnja_id = $request->inventar_radnja_id;
        $inventar->user_id = Auth::id();
        $inventar->save();
        return redirect()->action('InventarController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \iooa_proizvodni_is\Inventar  $inventar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventar $inventar)
    {
        //
    }
}
