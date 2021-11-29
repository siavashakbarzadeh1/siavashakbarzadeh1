<?php

namespace App\Http\Controllers;

use App\document;
use App\usermetadata;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DocumentController extends Controller
{
    public function show()
    {
        
        return view('user.documenti');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[

            'type' => 'required',
            'number' => 'required',
            'releasefrom' => 'required',
            'releasetime' => 'required',
            'expiredtime' => 'required',




            'path' => 'required|mimes:jpeg,png,bmp,pdf,doc,docx,txt',

        ]);
        // $date=$request->date('expiredtime');
        $myDate = $request->input('expiredtime');
        $date = Carbon::createFromFormat('m/d/Y', $myDate)->format('Y-m-d');
  
        // var_dump($date);
        // $date=$request->input('expiredtime');
    //     $date1= Carbon::createFromFormat('m/d/y',$date)->format('yyyy-mm-dd');
    // var_dump($date1);
        // dd($request->all());
        $file1 = $request->file('path');
        if ($request->hasFile('path'))
        {
            $sourceUrl = $this->uploadSource($file1);
        }
        $document = document::create(array_merge($request->all(),['path' => $sourceUrl]));

        return redirect('user/documenti');


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
    public function ExpireAttribute($date)
{
    
}
}
