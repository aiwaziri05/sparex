<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'Global Logistics Dashboard',
                'category' => 'Dashboards',
                'description' => 'A centralized dashboard for tracking shipments, fleet management, and real-time analytics for a multinational logistics firm.',
                'image' => 'portfolio-analytics',
                'tags' => ['Vue.js', 'Laravel', 'Google Maps API'],
                'color' => 'blue'
            ],
            [
                'title' => 'Manufacturing SOP Portal',
                'category' => 'Web Platforms',
                'description' => 'Digitized standard operating procedures with video guides and compliance tracking for a factory floor.',
                'image' => 'portfolio-automation',
                'tags' => ['React', 'Node.js', 'AWS S3'],
                'color' => 'indigo'
            ],
            [
                'title' => 'HR Onboarding Automation',
                'category' => 'System Automation',
                'description' => 'Automated entire employee onboarding process, integrating with payroll and slack, reducing manual work by 90%.',
                'image' => 'portfolio-ai',
                'tags' => ['Python', 'Zapier', 'Slack API'],
                'color' => 'orange'
            ],
            [
                'title' => 'Retail Data Warehouse',
                'category' => 'Data Engineering',
                'description' => 'Unified data warehouse solution aggregating sales data from 500+ stores for real-time reporting.',
                'image' => 'portfolio-analytics',
                'tags' => ['Snowflake', 'Dbt', 'PowerBI'],
                'color' => 'emerald'
            ],
            [
                'title' => 'Legal Archive Search',
                'category' => 'Web Platforms',
                'description' => 'OCR-enabled archive system for a law firm, making 50 years of case files searchable.',
                'image' => 'portfolio-automation',
                'tags' => ['OCR', 'Elasticsearch', 'Python'],
                'color' => 'purple'
            ],
            [
                'title' => 'Hybrid Cloud Migration',
                'category' => 'Cloud Infrastructure',
                'description' => 'Comprehensive roadmap and execution of migrating on-premise servers to Azure hybrid cloud environment.',
                'image' => 'portfolio-ai',
                'tags' => ['Azure', 'Hybrid Cloud', 'Security'],
                'color' => 'cyan'
            ],
             [
                'title' => 'Luxury Fashion App',
                'category' => 'Mobile Apps',
                'description' => 'Native mobile application for a luxury fashion brand with AR try-on features.',
                'image' => 'portfolio-analytics',
                'tags' => ['React Native', 'Firebase', 'ARKit'],
                'color' => 'rose'
            ],
        ];

        $categories = [
            'All',
            'Web Platforms',
            'Mobile Apps',
            'Dashboards',
            'System Automation',
            'Data Engineering',
            'Cloud Infrastructure'
        ];

        return view('portfolio.index', compact('projects', 'categories'));
    }
}
