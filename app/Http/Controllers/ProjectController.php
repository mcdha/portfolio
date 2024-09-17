<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $projectsCount = Project::count();
        return view('layout.layout', compact('projects', 'projectsCount'));
    }

}
