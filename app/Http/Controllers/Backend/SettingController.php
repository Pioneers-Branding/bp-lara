<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $setting = GeneralSetting::first();
        return view('admin.setting.index', compact('setting'));
    }

    public function generalSettingUpdate(Request $request) {
        $request->validate([
           'site_name' => ['required', 'max:200'],
           'layout' => ['required', 'max:200'],
           'contact_email' => ['required', 'max:200'],
           'currency_icon' => ['required', 'max:200'],
           'currency_name' => ['required', 'max:200'],
           'time_zone' => ['required', 'max:200'],
        ]);

        GeneralSetting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => $request->site_name,
                'layout' => $request->layout,
                'contact_email' => $request->contact_email,
                'currency_icon' => $request->currency_icon,
                'currency_name' => $request->currency_name,
                'time_zone' => $request->time_zone,
            ]
        );

        toastr('Setting Updated Successfully', 'success');

        return redirect()->back();
    }
}
