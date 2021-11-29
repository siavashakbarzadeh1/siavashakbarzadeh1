<?php

namespace App\Http\Controllers\user;

use App\event;
use App\UserMetadata;
use App\Http\Controllers\Controller;
use App\order;
use App\anagrafica;
use App\document;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function show()
    {


        $events = event::all();
        $UserMetadatas = UserMetadata::all();
        return view('user.dashboard', compact('events','UserMetadatas'));



    }
    public function welcome()
    {
        $events = event::all();
        $UserMetadata = UserMetadata::all();
        return view('guests.welcome', compact('events','UserMetadata'));
    }

    public function anagrafica(User $user){
//        $users = User::all();
//        return view('user.anagrafica');
    }
    public function documenti(){
        $events = event::all();
        $UserMetadatas = UserMetadata::all();
        return view('user.documenti', compact('events','UserMetadatas'));



    }

    public function domande_iscrizioni(){
        $events = event::all();
        $UserMetadatas = UserMetadata::all();
        return view('user.domande', compact('events','UserMetadatas'));

    }
    public function pagamenti(){
        $events = event::all();
        $UserMetadatas = UserMetadata::all();
        return view('user.pagamenti', compact('events','UserMetadatas'));

    }
    public function questionary(Request $request){
        $events = event::all();
        $UserMetadatas = UserMetadata::all();
        $order_check = Order::where('user_id',auth()->id())
           ->where( 'event_id', request('event_id'))
           ->exists();
////
////
       if ($order_check ) {


           return Redirect::back()->withErrors(['msg' => 'you are in this event please fill the questionary']);
       }
       else{
           $order = order::create($request->all());
           return redirect('joinEvent/questionary');
       }
        

    }
    public function store(Request $request){
//

    }
    public function edit( User $user)
    {
        return view('panel.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {


//
//        $request->validate([
//            'nome' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', ],
//
//
//        ]);
//
//        $user->update(
//            $request->only(['nome', 'email'])
//        );
//
//        return redirect()->route('user-anagrafica');
    }

    public function destroy($id)
    {
        //
    }
    public function joinEvent(){
        $events = event::all();
        return view('user.joinEvent');
    }
    public function addorder(Request  $request){


//
//
//        $order_check = Order::where('user_id',auth()->id())
//            ->where( 'event_id', request('event_id'))
//            ->exists();
////
////
//        if ($order_check ) {
//
//
//            return Redirect::back()->withErrors(['msg' => 'you are in this event please fill the questionary']);
//        }
//        else{
//            $order = order::create($request->all());
//            return redirect('joinEvent');
//        }




        return redirect('joinEvent');










    }

    private function alert()
    {
    }
    public function enterlog(){
        return view("enterlog");
    }
}
