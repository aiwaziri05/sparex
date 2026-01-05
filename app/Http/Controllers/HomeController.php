<?php

namespace App\Http\Controllers;

use App\Models\CoreValue;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\CompanyLogo;
use App\Models\SocialMediaLink;
use App\Models\Project;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $coreValues = CoreValue::active()->ordered()->get();
        $services = Service::active()->ordered()->get();
        $testimonials = Testimonial::active()->ordered()->get();
        $companyLogos = CompanyLogo::active()->ordered()->get();
        $socialMediaLinks = SocialMediaLink::active()->ordered()->get();
        $projects = Project::published()->where('show_on_homepage', true)->orderBy('published_at', 'desc')->take(6)->get();
        $posts = Post::published()->where('show_on_homepage', true)->orderBy('published_at', 'desc')->take(3)->get();

        return view('home', compact(
            'coreValues',
            'services',
            'testimonials',
            'companyLogos',
            'socialMediaLinks',
            'projects',
            'posts'
        ));
    }
}
