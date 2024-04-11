<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function addmessage(Request $request){
  Contact::create([
    'fullname' => $request->fullname,
    'email' =>  $request->email,
    'phone' =>  $request->phone,
    'subject' =>  $request->subject,
    'message' =>  $request->message,

 ]);

 $notification = array(
    'message' => ' Message added successfully!',
    'alert-type' => 'success'
);
return redirect()->back()->with($notification);
    } 
}
