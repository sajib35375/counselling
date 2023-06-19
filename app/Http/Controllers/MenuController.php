<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class MenuController extends Controller
{
    public function menuView(){
        $all_menu = Menu::all();
        return view('admin.menu.menu',compact('all_menu'));
    }

    public function menuStore(Request $request){
        $this->validate($request,[
            'name' => 'required',
        ]);

        Menu::insert([
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);
        return redirect()->back()->with('message','Menu Added Successfully');
    }

    public function menuStatusActive($id){
        $activeStatus = Menu::find($id);
        $activeStatus->status = true;
        $activeStatus->update();

        return redirect()->back()->with('message','Menu Status Activate Successfully');
    }

    public function menuStatusInActive($id){
        $inactiveStatus = Menu::find($id);
        $inactiveStatus->status = false;
        $inactiveStatus->update();

        return redirect()->back()->with('message','Menu Status InActivate Successfully');
    }

    public function menuDelete($id){
        $delete_menu = Menu::find($id);
        $delete_menu->delete();
        return redirect()->back()->with('warning','Menu Deleted Successfully');
    }

    //for menu post

    public function PostView(){
        $all_post = Post::all();
        return view('admin.menu_post.menu_post',compact('all_post'));
    }

    public function PostAdd(){
        $all_menu = Menu::all();
        return view('admin.menu_post.add_new_post',compact('all_menu'));
    }

    public function PostStore(Request $request){
        $this->validate($request,[
            'menu_id' => 'required',
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

        Post::insert([
            'menu_id' => $request->menu_id,
            'title' => $request->title,
            'top_text' => $request->top_text,
            'bottom_text' => $request->bottom_text,
            'photo' => $unique_name,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('post.view')->with('message','Post Added Successfully');
    }



    public function menuEdit($id){
        $edit_menu = Menu::find($id);
        return response()->json($edit_menu);
    }

    public function menuUpdate(Request $request){
        $update_menu = Menu::find($request->menu_edit_id);
        $update_menu->name = $request->name;
        $update_menu->update();

        return redirect()->back()->with('message','Menu Updated Successfully');
    }


}
