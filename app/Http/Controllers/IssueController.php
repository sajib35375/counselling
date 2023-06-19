<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class IssueController extends Controller
{
    public function addNewIssue(){
        return view('admin.issue.add_new_issue');
    }

    public function IssueStore(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'top_text' => 'required|max:400',
            'bottom_text' => 'required',
            'photo' => 'required',
        ]);

        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(150,150)->save('admin/images/'.$unique_name);
        }

        Issue::insert([
            'title' => $request->title,
            'top_text' => $request->top_text,
            'bottom_text' => $request->bottom_text,
            'photo' => $unique_name,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('issue.view')->with('message','Issue added Successfully');
    }

    public function IssueView(){
        $all_issue = Issue::all();
        return view('admin.issue.issue_view',compact('all_issue'));
    }

    public function IssueDelete($id){
        $delete_issue = Issue::find($id);
        $delete_issue->delete();

        return redirect()->back()->with('warning','Issue Deleted Successfully');
    }

    public function IssueEdit($id){
        $edit_data = Issue::find($id);
        return view('admin.issue.edit_issue',compact('edit_data'));
    }

    public function IssueUpdate(Request $request,$id){
        $this->validate($request,[
            'top_text' => 'max:400|min:300',
        ]);

        $update_data = Issue::find($id);
        if ($request->hasFile('photo')){
            $img = $request->file('photo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(150,150)->save('admin/images/'.$unique_name);
            unlink('admin/images/'.$request->old_photo);
        }else{
            $unique_name = $request->old_photo;
        }

        $update_data->title = $request->title;
        $update_data->top_text = $request->top_text;
        $update_data->bottom_text = $request->bottom_text;
        $update_data->photo = $unique_name;
        $update_data->update();

        return redirect()->route('issue.view')->with('warning','Issue Deleted Successfully');
    }



}
