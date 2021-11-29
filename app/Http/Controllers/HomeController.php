<?php

namespace App\Http\Controllers;

use App\usermetadata;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the application home.
     *
     * @return View
     */
    public function index(): View
    {
        return view('home');
    }
    public function store(Request $request)
    {
        $userdata_check=user::where('name',request ('name'))
            ->where( 'codicefiscale', request('codicefiscale'))
            ->exists();
        $usermetadata_check = usermetadata::where('name', request('name'))
            ->where( 'codicefiscale', request('codicefiscale'))
            ->exists();
//
//
        if ($usermetadata_check|$userdata_check) {




            return redirect('user/la-tua-anagrafica')->with('success', 'users Case is successfully saved');
        }
        $usermetadata = usermetadata::create($request->all());
        return redirect('user/la-tua-anagrafica')->with('success', 'users Case is successfully saved');
    }
}
