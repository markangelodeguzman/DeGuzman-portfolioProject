<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('admin.education.index', compact('educations'));
    }

    public function store(Request $request)
    {
        Education::create($request->all());
        return redirect()->back()->with('success', 'Education added successfully');
    }

    public function update(Request $request, Education $education)
    {
        $education->update($request->all());
        return redirect()->back()->with('success', 'Education updated successfully');
    }

    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->back()->with('success', 'Education deleted successfully');
    }
}
