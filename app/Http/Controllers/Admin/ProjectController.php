<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = 'storage/' . $request->file('image')->store('projects', 'public');
        }
        Project::create($data);
        return redirect()->back()->with('success', 'Project added successfully');
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete(str_replace('storage/', '', $project->image));
            }
            $data['image'] = 'storage/' . $request->file('image')->store('projects', 'public');
        }
        $project->update($data);
        return redirect()->back()->with('success', 'Project updated successfully');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $project->image));
        }
        $project->delete();
        return redirect()->back()->with('success', 'Project deleted successfully');
    }
}
