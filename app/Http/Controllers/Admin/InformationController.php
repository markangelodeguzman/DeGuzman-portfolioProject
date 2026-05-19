<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function index()
    {
        $info = Information::first();
        return view('admin.information.index', compact('info'));
    }

    public function update(Request $request, $id)
    {
        $info = Information::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $request->file('hero_image')->store('images', 'public');
        }

        if ($request->hasFile('about_image')) {
            $data['about_image'] = $request->file('about_image')->store('images', 'public');
        }

        if ($request->hasFile('cv_link')) {
            $data['cv_link'] = $request->file('cv_link')->store('cvs', 'public');
        }

        $info->update($data);

        return redirect()->back()->with('success', 'Information updated successfully');
    }
}
