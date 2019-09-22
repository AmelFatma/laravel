<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Parametre;
use App\Message;
use App\Mapper;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{
   public function index()
   {
         Mapper::map(
       53.381128999999990000,
       -1.470085000000040000,
       [

       'zoom' => 16 ,
       'draggable' => true,
       'marker' => '203 Fake St. Mountain View, San Francisco, California, USA',
       'evenAfterLoad' => 'circleListener(map[0].shapes[0].circle_0);'
       ]
       );

       return view('contact');
   }


   public function store(Request $request)
   {
       // $this->validate($request, [
       //     'nom' => 'required|min:3',
       //     'email' => 'required|email',
       //     'message' => 'required'
       // ]);

   		$message = new Message();
   		$message->nom = $request->nom;
   		$message->email = $request->email;
   		$message->message = $request->message;
   		$message->save();

       return redirect()->back()->with('message', 'Votre message a ete bien envoyer!');
   }

   public function adminIndex()
    {
        $messages = Message::orderBy('created_at','desc')->get();
        // return view('back/adminContact', compact('messages'));
        return view('adminContact', compact('messages'));
    }

    public function destroy(Message $message){
        Message::destroy($message->id);
        return redirect()->route('admin_contact_index');

    }
}
