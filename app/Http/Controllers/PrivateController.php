<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PrivateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('spid.auth');
    }

    /**
     * Show the application private area.
     *
     * @return View
     */
    public function index(): View
    {
        return view('private')->with('spid_user', resolve('SPIDAuth')->getSPIDUser());
    }
}
