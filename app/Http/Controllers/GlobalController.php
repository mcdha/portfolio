<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\GetInTouch;
use App\Models\PricePlan;

use Illuminate\Http\Request;

class GlobalController extends Controller
{

    public function index()
    {
        //PROJECTS
        $projects = Project::all();
        $projectsCount = Project::count();

        //TESTIMONIALS
        $testimonials = GetInTouch::where('is_testimonial', 1)->get();
        $testimonialsCount = GetInTouch::count();
        //PRICE PLANS
        $price_plans = PricePlan::all();
        
        return view('layout.layout', compact('projects', 'projectsCount', 'testimonials', 'testimonialsCount', 'price_plans'));
    }

}
