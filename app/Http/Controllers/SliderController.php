<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{
    public function slider(){
        $all_slider = Slider::all();
        return view('admin.slider.slider',compact('all_slider'));
    }

    public function sliderStore(Request $request){
        $this->validate($request,[
            'photo' => 'required'
        ]);

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(150,150)->save('admin/images/'.$unique_name);
        }

        Slider::insert([
            'photo' => $unique_name,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('message','Slider added Successfully');
    }

    public function sliderDelete($id){
        $delete_slider = Slider::find($id);
        $delete_slider->delete();
        return redirect()->back()->with('warning','Slider Deleted Successfully');
    }


    public function headerImage(){
        $header_data = Header::find(1);
        return view('admin.header.header',compact('header_data'));
    }

    public function headerImageUpdate(Request $request){
        $header_data = Header::find(1);

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(1430,270)->save('admin/images/'.$unique_name);
        }else{
            $unique_name = $request->old_photo;
        }
        $header_data->photo = $unique_name;
        $header_data->update();

        return redirect()->back()->with('message','Header Image Updated Successfully');
    }

    public function sliderEdit($id){
        $edit_slider = Slider::find($id);
        return view('admin.slider.slider_edit',compact('edit_slider'));
    }


    public function sliderUpdate(Request $request,$id){
        $update_data = Slider::find($id);

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(447,275)->save('admin/images/'.$unique_name);
            unlink('admin/images/'.$request->old_photo);
        }else{
            $unique_name = $request->old_photo;
        }

        $update_data->photo = $unique_name;
        $update_data->update();

        return redirect()->route('slider')->with('message','Slider Image Updated Successfully');
    }








}
