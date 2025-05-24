<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssessmentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function edit()
    {
        return view('assessment', ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update($user, Request $request)
    {
        $attributes = $request->validate([
           'skill_level' => ['required']
        ]);

        User::find($user)->update($attributes);

        return redirect('/recommendation');
    }
}
