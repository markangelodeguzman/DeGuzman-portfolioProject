<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Post;

class PortfolioController extends Controller
{
    public function index()
    {
        $info = Information::first();
        $educations = Education::all();
        $experiences = Experience::all();
        $services = Service::all();
        $skills = Skill::all();
        $projects = Project::all();
        $posts = Post::latest()->take(3)->get();

        return view('welcome', compact('info', 'educations', 'experiences', 'services', 'skills', 'projects', 'posts'));
    }
}
