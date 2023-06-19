<?php

namespace App\Http\Controllers;

use App\Models\CommentSlider;
use App\Models\Header;
use App\Models\Home;
use App\Models\Issue;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Therapy;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $header = Header::find(1);
        $all_slider = Slider::latest()->get();
        $home = Home::find(1);
        $all_issue = Issue::all();
        $all_comment = CommentSlider::all();
        $all_therapy = Therapy::all();

        return view('frontend.index',compact('header','all_slider','home','all_issue','all_comment','all_therapy'));
    }

    public function menuPageView($id){
          $all_post = Post::where('menu_id',$id)->get();
          $single_menu = Menu::find($id);
        return view('frontend.menu_page.menu_page',compact('all_post','single_menu'));
    }
}
