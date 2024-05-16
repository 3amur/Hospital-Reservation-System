<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{   
    public  function index()
    {
        if(Auth::id()){
            $doctors = Doctor::all();
            return view('user.home',compact('doctors'));
        }else{
            $doctors = Doctor::all();
            return view('user.home',compact('doctors'));
        }
    }

    public function storeAppointment(Request $request){
        if(!Auth::id()){
            return view('auth.login');
        }else {
            $data = $request->validate([
                'name' => 'required|string|min:3|max:40',
                'email' => 'required|email|string|min:3|max:30',
                'date' => 'required|date|string',
                'doctor' => 'required|string',
                'phone' => 'required|string|min:8|max:15',
                'message' => 'required|string|min:10|max:1000',
            ]);
    
            if(Auth::id()){
                $data['user_id'] = Auth::user()->id;
            }
    
            Appointment::create($data);
            return redirect()->back()->with('message','Appointment Created Successfully, We will Contact You Soon!');
        }
    }

    public function showAppointment(){
        if(Auth::id()) {
            $userid = Auth::user()->id;
            $appointments = Appointment::where('user_id',$userid)->get();
            return view('user/layouts/all_appointments', compact('appointments'));
        } else {
            return redirect()->back();
        }
    }

    public function cancelAppointment($id){
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function redirect()
    {
        // Check if the user not logged in
        if (Auth::id()) {
            if (Auth::user()->usertype == 'user') {
                $doctors = Doctor::all();
                return view('user.home',compact('doctors'));
            } else {
                return view('admin.home');
            }
        } else{
            return redirect()->back();
        }
    }
    public function logout(Request $request)
    {
        if($request->user()->usertype == 'user'){
        Auth::logout();
        return redirect()->route('home');
        }
    }
}