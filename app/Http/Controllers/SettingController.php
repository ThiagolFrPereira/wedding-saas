<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return response()->json(Setting::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|string|unique:settings',
            'value' => 'required|string',
        ]);

        $setting = Setting::create($request->all());

        return response()->json($setting, 201);
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        $setting->update($request->all());

        return response()->json($setting);
    }
}
