<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $doctors = Doctor::get();
        return view('admin.doctor.index',compact('doctors'));
    }

    public function create(){
        return view('admin.doctor.add');
    }

    public function addDoctor(Request $request){
        $data = $request->validate([
            'name' => 'required|min:3|max:30|string',
            'phone' => 'required|min:8|max:15|string',
            'speciality' => 'required|min:5|max:30',
            'room' => 'required|min:1|max:50|numeric',
            'image' => 'required|file|image|mimes:jpg,jpeg,jpeng,png,gif',
        ]);
        $Image_Name = $request->file('image')->store('storage');
        $data['image'] = $Image_Name;
        
        Doctor::create($data);
        return back()->with('success', 'Doctor Added Successfully');
    }

    public function editDoctor($id){
        $doctor = Doctor::findOrFail($id);
        return view('admin.doctor.edit', compact('doctor')); 
    }

    public function updateDoctor(Request $request, $id){
        $doctor = Doctor::findOrFail($id);

        $doctor = $request->validate([
            'name' => 'required|min:3|max:30|string',
            'phone' => 'required|min:8|max:15|string',
            'speciality' => 'required|min:5|max:30',
            'room' => 'required|min:1|max:50|numeric',
            'image' => 'file|image|mimes:jpg,jpeg,jpeng,png,gif',
        ]);
        if($request->image){
            $Image_Name = $request->file('image')->store('storage');
            $doctor['image'] = $Image_Name;
        }

        Doctor::where('id', $id)->update($doctor);
        return back()->with('success', 'Data Updated Successfully');
    }

    public function deleteDoctor($id){
        $data = Doctor::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }

    public function allAppointments(){
        $appointments = Appointment::all();
        return view ('admin.appointments', compact('appointments'));
    }

    public function approveAppointment($id){
        $data = Appointment::findOrFail($id);
        $data->status = 'Approved';

        $data->save();
        return redirect()->back();
    }

    public function cancelAppointment($id){
        $data = Appointment::findOrFail($id);
        $data->status = 'Canceled';

        $data->save();
        return redirect()->back();
    }
}