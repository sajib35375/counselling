<?php

namespace App\Http\Controllers;

use App\Models\Therapy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class TherapyController extends Controller
{
    public function addTherapy(){
        $all_data = Therapy::all();
        return view('admin.therapy.add_new_therapy',compact('all_data'));
    }

    public function storeTherapy(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'top_text' => 'required|max:400|min:300',
            'bottom_text' => 'required',
            'photo' => 'required',
        ]);

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(150,150)->save('admin/images/'.$unique_name);
        }

        Therapy::insert([
            'title' => $request->title,
            'top_text' => $request->top_text,
            'bottom_text' => $request->bottom_text,
            'photo' => $unique_name,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('view.therapy')->with('message','Therapy added Successfully');
    }

    public function viewTherapy(){
        $all_therapy = Therapy::all();
        return view('admin.therapy.therapy',compact('all_therapy'));
    }


    public function deleteTherapy($id){
        $delete_data = Therapy::find($id);
        $delete_data->delete();

        return redirect()->back()->with('warning','Therapy Deleted Successfully');
    }


    public function EditTherapy($id){
        $edit_therapy = Therapy::find($id);
        return view('admin.therapy.therapy_edit',compact('edit_therapy'));
    }

    public function UpdateTherapy(Request $request,$id){

        $this->validate($request,[
            'top_text' => 'max:400|min:300',
        ]);


        $update_therapy = Therapy::find($id);

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(150,150)->save('admin/images/'.$unique_name);
            unlink('admin/images/'.$request->old_photo);
        }else{
            $unique_name = $request->old_photo;
        }

        $update_therapy->title = $request->title;
        $update_therapy->top_text = $request->top_text;
        $update_therapy->bottom_text = $request->bottom_text;
        $update_therapy->photo = $unique_name;
        $update_therapy->update();

        return redirect()->route('view.therapy')->with('message','Therapy Updated Successfully');
    }



}
