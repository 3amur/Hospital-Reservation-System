<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('user.contact');
    }

    public function sendMessage(Request $request){
        $data = $request->validate([
            'name' => 'required|string|min:3|max:30',
            'email' => 'required|email|min:3|max:40',
            'subject' => 'required|string|min:5|max:50',
            'message' => 'required|string|min:10|max:1000'
        ]);

        Contact::create($data);
        return back()->with('success','Data created successfully');
    }
}
