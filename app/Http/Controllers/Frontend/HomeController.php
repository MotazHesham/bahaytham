<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Aboutu;
use App\Models\Partner;
use App\Models\Project;
use App\Models\SaidAboutUs;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::where('published',1)->get();
        $about_us = Aboutu::first();
        $services = Service::all();
        $projects = Project::where('published',1)->orderBy('created_at','desc')->take(10)->get();
        $said_about_us = SaidAboutUs::orderBy('created_at','desc')->take(10)->get();
        $partners = Partner::all();
        return view('frontend.index',compact('sliders','about_us','services','projects','said_about_us','partners'));
    }

    public function aboutus(){
        return view('frontend.aboutus');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function request_service(){
        return view('frontend.request_service');
    }

    public function project(){
        return view('frontend.project');
    }

    public function projects(){
        return view('frontend.projects');
    }

    public function service(){
        return view('frontend.service');
    }

    public function services(){
        return view('frontend.services');
    }
}
