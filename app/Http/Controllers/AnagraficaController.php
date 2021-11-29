<?php

namespace App\Http\Controllers;

use App\anagrafica;
use App\event;
use App\UserMetadata;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AnagraficaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = event::all();
        $UserMetadatas = UserMetadata::all();
        return view('user.anagrafica', compact('events','UserMetadatas'));


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

        $anagrafica_check = anagrafica::where( 'codicefiscale', request('codicefiscale'))

            ->exists();
//
//
        if ($anagrafica_check ) {


            return Redirect::back()->withErrors(['msg' => 'you saved your infromation before']);
        }
        else{
            $anagrafica = anagrafica::create($request->all());
//            return Redirect::back();
            return redirect ('user/documenti');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\anagrafica  $anagrafica
     * @return \Illuminate\Http\Response
     */
    public function show(anagrafica $anagrafica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\anagrafica  $anagrafica
     * @return \Illuminate\Http\Response
     */
    public function edit(anagrafica $anagrafica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\anagrafica  $anagrafica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anagrafica $anagrafica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\anagrafica  $anagrafica
     * @return \Illuminate\Http\Response
     */
    public function destroy(anagrafica $anagrafica)
    {
        //
    }
}
