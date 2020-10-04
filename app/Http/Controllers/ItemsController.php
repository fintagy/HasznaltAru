<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\hasznalt_termek;
use App\hasznalt_kapcsolat;

class itemsController extends Controller
{
    public function index()
    {
        		
		$tkartya = DB::table('hasznalt_termeks')
            ->join('hasznalt_kapcsolats', 'hasznalt_termeks.kapcs_id', '=', 'hasznalt_kapcsolats.id')            
            ->select('hasznalt_termeks.id',
                     'hasznalt_termeks.nev2',
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
        
        $tlistak = DB::table('hasznalt_termeks')                       
                    ->select('nev1', 'nev2')
                    ->groupBy('nev1', 'nev2')
                    ->get();
        
        $termek = DB::table('hasznalt_termeks')                      
            ->select('hasznalt_termeks.id',
                     'hasznalt_termeks.nev2',
                     'hasznalt_termeks.ar',
                     'hasznalt_termeks.nev1',
                     'hasznalt_termeks.termkeputvonal',
					 'hasznalt_termeks.leiras',
                     'hasznalt_termeks.allapot',
                     'hasznalt_termeks.db',
                     'hasznalt_termeks.updated_at')
            ->where ('hasznalt_termeks.id', 0)			
            ->get();        
        
		return view('dashboard', array('titem1' => $termek, 'tlists' => $tlistak, 'titems' => $tkartya));
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
        $tkartya = DB::table('hasznalt_termeks')
            ->join('hasznalt_kapcsolats', 'hasznalt_termeks.kapcs_id', '=', 'hasznalt_kapcsolats.id')            
            ->select('hasznalt_termeks.id',
                     'hasznalt_termeks.nev2',
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
        
        $tlistak = DB::table('hasznalt_termeks')                       
                    ->select('nev1', 'nev2')
                    ->groupBy('nev1', 'nev2')
                    ->get();
        
        //$termek = \App\hasznalt_termek::find(1);
        $termek = DB::table('hasznalt_termeks')                      
            ->select('hasznalt_termeks.id',
                     'hasznalt_termeks.nev2',
                     'hasznalt_termeks.ar',
                     'hasznalt_termeks.nev1',
                     'hasznalt_termeks.termkeputvonal',
					 'hasznalt_termeks.leiras',
                     'hasznalt_termeks.allapot',
                     'hasznalt_termeks.db',
                     'hasznalt_termeks.updated_at')
            ->where ('id', $id)
			->orderby ('hasznalt_termeks.id')
            ->get();
        
        if (empty($termek)){
                echo 'üres';
            } else {
                echo 'teli'; //{{$titem1[0] -> leiras}}
            }
        
      return view('dashboard', array('titem1' => $termek, 'tlists' => $tlistak, 'titems' => $tkartya));
    
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
