<?php

namespace App\Http\Controllers;

use App\usermetadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UsermetadataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('metadata');
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
//        $metadata_check = usermetadata::where('spidcode',request('spidcode'))
//            ->where( 'codicefiscale', request('codicefiscale'))
//            ->exists();
////
////
//        if ($metadata_check ) {
//
//
//            return Redirect::back()->withErrors(['msg' => 'you saved your infromation before']);
//        }
//        else{
//            $validatedData = $request->validate([
//                'spidcode' => 'required|max:255',
//                'name' => 'required|max:255',
//                'family' => 'required|max:255',
//                'codicefiscale' => 'required|max:255',
//                'cellulare' => 'required|max:255',
//                'email' => 'required',
//
//            ]);
//            $show = user::create($validatedData);
//
//            return redirect('/admin/users')->with('success', 'users Case is successfully saved');
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usermetadata  $usermetadata
     * @return \Illuminate\Http\Response
     */
    public function show(usermetadata $usermetadata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usermetadata  $usermetadata
     * @return \Illuminate\Http\Response
     */
    public function edit(usermetadata $usermetadata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usermetadata  $usermetadata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usermetadata $usermetadata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usermetadata  $usermetadata
     * @return \Illuminate\Http\Response
     */
    public function destroy(usermetadata $usermetadata)
    {
        //
    }
}
