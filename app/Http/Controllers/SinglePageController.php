<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Post;
use App\Models\Therapy;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function SinglePage($id){
        $single_issue = Issue::find($id);
        return view('frontend.single_page.single_page',compact('single_issue'));
    }

    public function TherapySinglePage($id){
        $therapy_single = Therapy::find($id);
        return view('frontend.single_page.therapy_single',compact('therapy_single'));
    }

    public function menuSingleView($id){
       $single_post = Post::find($id);
       return view('frontend.single_page.menu_single',compact('single_post'));
    }

}
