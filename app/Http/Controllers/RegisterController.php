<?php

namespace App\Http\Controllers;

use App\Mail\RegMail;
use App\Models\Register;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function registerView(){
        return view('frontend.register.register');
    }

    public function registerStore(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'age' => 'required',
            'gender' => 'required'
        ]);

        Register::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'age' => $request->age,
            'gender' => $request->gender,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back()->with('message','Registration Successful');
    }


    public function adminReg(){
        $all_data = Register::latest()->get();
        return view('admin.register.register',compact('all_data'));
    }


    public function statusActive($id){
        $active = Register::find($id);
        $active->status = true;
        $active->update();

        $mailData = [
            'title' => $active->name,
            'email' => $active->email,
            'desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.'
        ];

        Mail::to($active->email)->send(new RegMail($mailData));

        return redirect()->back()->with('message','Registration Approve Successfully');
    }


    public function statusInactive($id){
        $inactive = Register::find($id);
        $inactive->status = false;
        $inactive->update();

        return redirect()->back()->with('warning','Registration Inactive Successfully');
    }

    public function editReg($id){
        $edit = Register::find($id);
        return view('admin.register.edit_registration',compact('edit'));
    }


    public function updateReg(Request $request,$id){
        $update = Register::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->location = $request->location;
        $update->age = $request->age;
        $update->gender = $request->gender;
        $update->updated_at = Carbon::now();
        $update->update();

        return redirect()->route('admin.reg')->with('message','User Registration Update Successfully');
    }


    public function deleteReg($id){
        $delete_data = Register::find($id);
        $delete_data->delete();

        return redirect()->back()->with('warning','User Registration Deleted Successfully');
    }

}
