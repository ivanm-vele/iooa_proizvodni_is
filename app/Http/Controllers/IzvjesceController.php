<?php

namespace iooa_proizvodni_is\Http\Controllers;

use iooa_proizvodni_is\Izvjesce;
use iooa_proizvodni_is\IzvjesceTip;
use iooa_proizvodni_is\Stroj;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->uloga_id == 1 || Auth::user()->uloga_id == 2){
            $izvjesca = Izvjesce::all();
        }else{
            $izvjesca = Izvjesce::where('izvjesce_tip_id', '=', 3)->get();
        }
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
        if(Auth::user()->uloga_id == 1 || Auth::user()->uloga_id == 2){
            $tipovi_izvjesca = IzvjesceTip::find([2, 3, 4]);
        }else{
            $tipovi_izvjesca = IzvjesceTip::find([3]);
        }
        $strojevi = Stroj::all();
        return view('izvjesce', ['tipovi_izvjesca' => $tipovi_izvjesca, 'strojevi' => $strojevi]);
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
        $izvjesce->opis_kvarovi = $request->opis_kvarovi;
        $izvjesce->opis = $request->opis;
        $izvjesce->stroj_id = $request->stroj_id;
        $izvjesce->izvjesce_tip_id = $request->izvjesce_tip_id;   
        $izvjesce->komada_proizvedeno = $request->komada_proizvedeno;
        $izvjesce->komada_skarta = $request->komada_skarta;
        $izvjesce->minuta_izvan_pogona = $request->minuta_izvan_pogona;
        $izvjesce->user_id = Auth::id();
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
        $tipovi_izvjesca = IzvjesceTip::all();
        $strojevi = Stroj::all();
        return view('izvjesce', ['izvjesce' => $izvjesce, 'tipovi_izvjesca' => $tipovi_izvjesca, 'strojevi' => $strojevi]);
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
        $izvjesce->opis_kvarovi = $request->opis_kvarovi;
        $izvjesce->opis = $request->opis;
        $izvjesce->stroj_id = $request->stroj_id;
        $izvjesce->izvjesce_tip_id = $request->izvjesce_tip_id;   
        $izvjesce->komada_proizvedeno = $request->komada_proizvedeno;
        $izvjesce->komada_skarta = $request->komada_skarta;
        $izvjesce->minuta_izvan_pogona = $request->minuta_izvan_pogona;
        $izvjesce->user_id = Auth::id();
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
