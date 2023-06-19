<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Image;

class HomeController extends Controller
{
    public function homeSection(){
        $home_data = Home::find(1);
        return view('admin.home.home',compact('home_data'));
    }

    public function homeUpdate(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'head_title' => 'required',
            'quote' => 'required',
            'author' => 'required',
            'text_one' => 'required',
            'text_two' => 'required',
            'text_three' => 'required',
            'text_four' => 'required',
            'text_five' => 'required',
            'text_six' => 'required',
            'opportunity_title' => 'required',
            'photo' => 'required',

        ]);

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(140,211)->save('admin/images/'.$unique_name);
        }else{
            $unique_name = $request->old_photo;
        }

        $update_data = Home::find(1);
        $update_data->title = $request->title;
        $update_data->head_title = $request->head_title;
        $update_data->quote = $request->quote;
        $update_data->author = $request->author;
        $update_data->opportunity_title = $request->opportunity_title;
        $update_data->text_one = $request->text_one;
        $update_data->text_two = $request->text_two;
        $update_data->text_three = $request->text_three;
        $update_data->text_four = $request->text_four;
        $update_data->text_five = $request->text_five;
        $update_data->text_six = $request->text_six;
        $update_data->photo = $unique_name;
        $update_data->update();

        return redirect()->back()->with('message','Home Page Updated Successfully');
    }
}
