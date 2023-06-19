<?php

namespace App\Http\Controllers;

use App\Models\CommentSlider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentSliderController extends Controller
{
    public function CommentSlider(){
        $all_comment = CommentSlider::all();
        return view('admin.commentSlider.comment_slider',compact('all_comment'));
    }

    public function CommentSliderStore(Request $request){
        $this->validate($request,[
            'comment' => 'required',
            'author' => 'required',
        ]);
        CommentSlider::insert([
            'comment' => $request->comment,
            'author' => $request->author,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back()->with('message','Comment Slider added Successfully');
    }

    public function CommentSliderEdit($id){
        $edit_data = CommentSlider::find($id);
        return view('admin.commentSlider.comment_edit',compact('edit_data'));
    }


    public function CommentSliderUpdate(Request $request,$id){
        $update_data = CommentSlider::find($id);
        $update_data->comment = $request->comment;
        $update_data->author = $request->author;
        $update_data->update();

        return redirect()->route('comment.slider')->with('message','Comment Slider Updated Successfully');
    }

    public function CommentSliderDelete($id){
        $delete_data = CommentSlider::find($id);
        $delete_data->delete();

        return redirect()->back()->with('warning','Comment Slider Deleted Successfully');
    }



}
