<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\StoreRequestServiceRequest;
use App\Models\Aboutu;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Project;
use App\Models\RequestService;
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
        $about_us = Aboutu::first();
        return view('frontend.aboutus',compact('about_us'));
    }

    public function contact(){
        $about_us = Aboutu::first();
        return view('frontend.contact',compact('about_us'));
    }

    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->all());
        // toast(trans('flash.store.success_title'),'success');
        return redirect()->route('frontend.contact');
    }

    public function request_service(){
        return view('frontend.request_service');
    }

    // public function store_request_service(StoreRequestServiceRequest $request){
    //     $request_service = RequestService::create($request->all());
    //     return redirect()->route('frontend.request_service');
    // }

    public function project(){
        $project = Project::first();
        return view('frontend.project',compact('project'));
    }

    public function projects(){
        $projects = Project::where('published',1)->orderBy('created_at','desc')->take(10)->get();
        return view('frontend.projects',compact('projects'));
    }

    public function service(){
        $services = Service::all();
        return view('frontend.service');
    }

    public function services(){
        $services = Service::all();
        return view('frontend.services',compact('services'));
    }
}
