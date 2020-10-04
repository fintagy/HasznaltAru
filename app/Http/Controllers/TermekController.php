<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\hasznalt_termek;
use App\hasznalt_kapcsolat;

class TermekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        		
		$tkartya = DB::table('hasznalt_termeks')
            ->join('hasznalt_kapcsolats', 'hasznalt_termeks.kapcs_id', '=', 'hasznalt_kapcsolats.id')            
            ->select('hasznalt_termeks.nev2',
                     'hasznalt_termeks.ar',
                     'hasznalt_termeks.nev1',
                     'hasznalt_termeks.termkeputvonal',
					 'hasznalt_termeks.leiras',
                     'hasznalt_termeks.allapot',
                     'hasznalt_termeks.db',
                     'hasznalt_termeks.updated_at',                     
					 'hasznalt_kapcsolats.nev',
                     'hasznalt_kapcsolats.kapcskeputvonal',
                     'hasznalt_kapcsolats.telefonsz',
					 'hasznalt_kapcsolats.telefonkiir',
                     'hasznalt_kapcsolats.imel')
			->orderby ('hasznalt_termeks.id')
            ->get();
		
		return view('show', array('ttermek' => $tkartya));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hasznalt_termek  $hasznalt_termek
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $termek = hasznalt_termek::find($id);
        $kapcsolat = hasznalt_kapcsolat::find($termek -> kapcs_id);
      return view('show', array('termek' => $termek, 'kapcsolat' => $kapcsolat));
    }	
	
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hasznalt_termek  $hasznalt_termek
     * @return \Illuminate\Http\Response
     */
    public function edit(hasznalt_termek $hasznalt_termek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hasznalt_termek  $hasznalt_termek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hasznalt_termek $hasznalt_termek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hasznalt_termek  $hasznalt_termek
     * @return \Illuminate\Http\Response
     */
    public function destroy(hasznalt_termek $hasznalt_termek)
    {
        //
    }
}
