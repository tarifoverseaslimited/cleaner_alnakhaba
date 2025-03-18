<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $services = collect(include(base_path('resources/views/website/service/data.php')))->where('status',1);
        $sliders = collect(include(base_path('resources/views/website/home/sliderdata.php')))->where('status',1);
        $projects = collect(include(base_path('resources/views/website/project/data.php')))->where('status',1);
        $clients = collect(include(base_path('resources/views/website/home/clientData.php')))->where('status',1);
        $testimonials = collect(include(base_path('resources/views/website/home/testimonialData.php')))->where('status',1);
        $blogs = collect(include(base_path('resources/views/website/blog/data.php')))->where('status',1)->sortByDesc('id')
            ->values()->take(2);
        return view('website.home.index',compact('services','sliders','projects','clients','testimonials','blogs'));
    }
    public function service(){
        $data = include(base_path('resources/views/website/service/data.php'));
        $services = collect($data)->where('status',1);
        return view('website.service.index',compact('services'));
    }
    public function serviceDetails($slug){
        $data = include(base_path('resources/views/website/service/data.php'));
        $services = collect($data)->where('status',1);
        $service = collect($data)->where('status',1)->firstWhere('slug',$slug);
        return view('website.service.details',compact('service','services'));
    }
    public function project(){
        $serviceData = include(base_path('resources/views/website/service/data.php'));
        $services = collect($serviceData)->where('status',1);
        $data = include(base_path('resources/views/website/project/data.php'));
        $projects = collect($data)->where('status',1);
        return view('website.project.index',compact('services','projects'));
    }
    public function projectDetails($slug){
        $data = include(base_path('resources/views/website/project/data.php'));
        $project = collect($data)->where('status',1)->firstWhere('slug',$slug);
        return view('website.project.details',compact('project'));
    }
    public function blog(){
        $blogs = collect(include(base_path('resources/views/website/blog/data.php')))->where('status',1);
        return view('website.blog.index',compact('blogs'));
    }
    public function blogDetails($slug){
        $blog = collect(include(base_path('resources/views/website/blog/data.php')))->where('status',1)->firstWhere('slug',$slug);
        $blogs = collect(include(base_path('resources/views/website/blog/data.php')))->where('status',1)->whereNotIn('id',$blog['id'])->sortByDesc('id')
            ->values();
        $services = collect(include(base_path('resources/views/website/service/data.php')))->where('status',1)->values();
        return view('website.blog.details',compact('blog','services','blogs'));
    }
    public function about(){
        $testimonials = collect(include(base_path('resources/views/website/home/testimonialData.php')))->where('status',1);
        return view('website.about.index',compact('testimonials'));
    }
    public function contact(){
        return view('website.contact.index');
    }
    public function orderService(Request $request){
        return back()->with('success','Submit Successfully.');
    }
    public function contactFormSubmit(){
        return back()->with('success','Submit Successfully.');
    }

}
