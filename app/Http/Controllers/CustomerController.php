<?php

// customerController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = customer::all();

        return view('admin.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');
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
            'cout_event' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|numeric',
        ]);
        $show = customer::create($validatedData);

        return redirect('/admin/customers')->with('success', 'customers Case is successfully saved');
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
        $customers = customer::findOrFail($id);

        return view('admin.customers.edit', compact('customers'));
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
            'cout_event' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|numeric',
        ]);
        customer::whereId($id)->update($validatedData);

        return redirect('admin/customers')->with('success', 'customers  Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customers = customer::findOrFail($id);
        $customers->delete();

        return redirect('admin/customers')->with('success', 'customers Data is successfully deleted');
    }
}
