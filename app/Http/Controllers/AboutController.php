<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $doctors = Doctor::all();
        return view('user.about-us', compact('doctors'));
    }
}
