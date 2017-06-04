<?php

namespace iooa_proizvodni_is\Http\Controllers;

use iooa_proizvodni_is\Izvjesce;
use Illuminate\Http\Request;

class IzvjesceController extends Controller
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
        $izvjesca = Izvjesce::all();
        error_log('Izvjesca = ' .$izvjesca);
        return view('izvjesca', ['izvjesca' => $izvjesca]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('izvjesce');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $izvjesce = new Izvjesce;
        $izvjesce->naziv = $request->naziv;
        $izvjesce->opis = $request->opis;
        $izvjesce->proizvod_id = $request->proizvod_id;
        $izvjesce->save();
        return redirect()->action('IzvjesceController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \iooa_proizvodni_is\Izvjesce  $izvjesce
     * @return \Illuminate\Http\Response
     */
    public function show(Izvjesce $izvjesce, $id)
    {
        $izvjesce = Izvjesce::find($id);
        return view('izvjesce', ['izvjesce' => $izvjesce]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \iooa_proizvodni_is\Izvjesce  $izvjesce
     * @return \Illuminate\Http\Response
     */
    public function edit(Izvjesce $izvjesce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \iooa_proizvodni_is\Izvjesce  $izvjesce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Izvjesce $izvjesce)
    {
        
        $izvjesce = Izvjesce::find($request->id);
        $izvjesce->naziv = $request->naziv;
        $izvjesce->opis = $request->opis;
        $izvjesce->proizvod_id = $request->proizvod_id;
        $izvjesce->save();

        return redirect()->action('IzvjesceController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \iooa_proizvodni_is\Izvjesce  $izvjesce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Izvjesce $izvjesce)
    {
        //
    }
}
