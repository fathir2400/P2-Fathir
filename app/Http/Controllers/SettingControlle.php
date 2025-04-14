<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request\SettingRequestUpdate;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingControlle extends Controller
{
    public function index(){
        $setting = Setting::get()->first();
        return view('setting.index', compact('setting'));
        // return view('setting.index', compact('settings'));
    }
    
    public function edit(string $id_setting){
        return view('setting.update', [
            'setting' => Setting::find($id_setting)
        ]);
    }

    
    public function update(SettingRequestUpdate $request, $id_setting){
       

        $data = $request->validate([
            'nama' => 'nullable|max:255',
        'email' => 'nullable|',
        'alamat' => 'nullable|',
        'telepon' => 'nullable|min:6',
        'logo'          => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);
        
        if ($request->hasFile('logo')){
            $checkingFile = $request->file('logo');
            $filename = $checkingFile->getClientOriginalName();
            $path = $checkingFile->storeAs('public/logo',$filename);
            $data ['logo'] = $filename;
        }
        
        // Update data setting di database
        Setting::findOrFail($id_setting)->update($data);
        
            return redirect(route('setting.index'))->with('succes', 'Setting has been Update');
    }
    
}
