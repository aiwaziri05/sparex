<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::published()
            ->orderBy('published_at', 'desc')
            ->get();

        $categories = [
            'All',
            'Web Platforms',
            'Mobile Apps',
            'Dashboards',
            'System Automation',
            'Data Analytics',
            'IT Infrastructure'
        ];

        return view('portfolio.index', compact('projects', 'categories'));
    }

    public function show($slug)
    {
        $project = Project::published()
            ->where('slug', $slug)
            ->firstOrFail();

        // Get related projects (same category, exclude current)
        $relatedProjects = Project::published()
            ->where('category', $project->category)
            ->where('slug', '!=', $slug)
            ->take(3)
            ->get();

        return view('portfolio.show', compact('project', 'relatedProjects'));
    }
}
