<?php

namespace App\Http\Controllers;

use App\event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = event::all();

        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'welcome_description' => 'required',
//            'status' => 'required',
            'contact_dep' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'contact_fax' => 'required',
            'bando' => 'required',
            'company_link' => 'required',

            'open_time' => 'required',
            'close_time' => 'required',
        ]);

        $show = event::create($validatedData);

        return redirect('/admin/events')->with('success', 'events Case is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = event::findOrFail($id);

        return view('admin.events.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'welcome_description' => 'required',
            'open_time' => 'required',
            'close_time' => 'required',
        ]);
        event::whereId($id)->update($validatedData);

        return redirect('admin/events')->with('success', 'events  Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = event::findOrFail($id);
        $events->delete();

        return redirect('admin/events')->with('success', 'events Data is successfully deleted');
    }
}
