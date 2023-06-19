<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class SiteSettingController extends Controller
{
    public function siteSetting(){
        $data = SiteSetting::find(1);
        return view('admin.site_setting.site_setting',compact('data'));
    }

    public function siteSettingUpdate(Request $request){
        $update_data = SiteSetting::find(1);
        if ($request->hasFile('logo')){
            $img = $request->file('logo');
            $unique_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(556,101)->save('admin/images/'.$unique_name);
            unlink('admin/images/'.$request->old_logo);
        }else{
            $unique_name = $request->old_logo;
        }

        $update_data->logo = $unique_name;
        $update_data->phone = $request->phone;
        $update_data->address = $request->address;
        $update_data->email = $request->email;
        $update_data->facebook = $request->facebook;
        $update_data->twitter = $request->twitter;
        $update_data->instagram = $request->instagram;
        $update_data->linkedin = $request->linkedin;
        $update_data->social_email = $request->social_email;
        $update_data->blogger = $request->blogger;
        $update_data->updated_at = Carbon::now();
        $update_data->update();

        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
