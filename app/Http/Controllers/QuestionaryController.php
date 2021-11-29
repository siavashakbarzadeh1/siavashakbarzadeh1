<?php

namespace App\Http\Controllers;

use App\questionary;
use Illuminate\Http\Request;

class QuestionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questionaries = questionary::all();

        return view('admin.questionaries.index', compact('questionaries'));
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
        $this->validate(request(),[

            'type' => 'required',
            'number' => 'required',
            'path' => 'required|mimes:jpeg,png,bmp,pdf,doc,docx,txt',

        ]);
        $myDate = $request->input('expiredtime');
        $date = Carbon::createFromFormat('m/d/Y', $myDate)->format('Y-m-d');
  
        $file1 = $request->file('path');
        if ($request->hasFile('path'))
        {
            $sourceUrl = $this->uploadSource($file1);
        }
        $questionary = questionary::create(array_merge($request->all(),['path' => $sourceUrl]));

        return redirect('user/documenti');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\questionary  $questionary
     * @return \Illuminate\Http\Response
     */
    public function show(questionary $questionary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\questionary  $questionary
     * @return \Illuminate\Http\Response
     */
    public function edit(questionary $questionary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\questionary  $questionary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, questionary $questionary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\questionary  $questionary
     * @return \Illuminate\Http\Response
     */
    public function destroy(questionary $questionary)
    {
        //
    }
    private function uploadSource($file1)
    {
        // $user = User::auth();
        $sourcePath = "\upload\sources";
        $filename1 =  time().'.'.$file1->getClientOriginalName();
        $file1 = $file1->move(public_path($sourcePath),$filename1);
        return $filename1;
    }
}
