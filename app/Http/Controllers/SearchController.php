<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $projects = Project::where('name', 'LIKE', '%'.request('search').'%')->get();

        return view('tutorial', [
            'projects' => $projects,
            'search' => request('search')
        ]);
    }
}
