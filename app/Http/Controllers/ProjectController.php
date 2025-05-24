<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function featured()
    {
        return view('home', [
            'projects' => Project::latest()->limit(3)->get(),
        ]);
    }

    public function tutorial()
    {
        $allProjects = Project::all();

        $projects = $allProjects->groupBy('skill_level_required');

        return view('tutorial', [
            'beginner_projects' => $projects->get('beginner')->take(3),
            'intermediate_projects' => $projects->get('intermediate')->take(3),
            'advanced_projects' => $projects->get('advanced')->take(3),
        ]);
    }

    public function recommendation()
    {
        $projects = Project::where('skill_level_required', Auth::user()->skill_level)->paginate(6);
        $skill_level = Str::title(Auth::user()->skill_level);

        return view('recommendation', [
            'projects' => $projects,
            'skill_level' => $skill_level
        ]);
    }

    public function project_details($id)
    {
        return view('project-details', [
            'project' => Project::find($id),
        ]);
    }
}
