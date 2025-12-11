<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = $this->getProjects();

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

    public function show($slug)
    {
        // Find project by slug (or index for now since we're using array)
        $projects = $this->getProjects();
        
        $project = collect($projects)->firstWhere('slug', $slug);
        
        if (!$project) {
            abort(404, 'Project not found');
        }
        
        // Convert to object for easier access in view
        $project = (object) $project;
        
        // Get related projects (same category, exclude current)
        $relatedProjects = collect($projects)
            ->where('category', $project->category)
            ->where('slug', '!=', $slug)
            ->take(3)
            ->toArray();
        
        return view('portfolio.show', compact('project', 'relatedProjects'));
    }

    private function getProjects()
    {
        return [
            [
                'title' => 'Global Logistics Dashboard',
                'slug' => 'global-logistics-dashboard',
                'category' => 'Dashboards',
                'description' => 'A centralized dashboard for tracking shipments, fleet management, and real-time analytics for a multinational logistics firm.',
                'content' => '<h2>Project Overview</h2><p>Built a comprehensive logistics management platform that handles real-time tracking of over 10,000 shipments daily across 50+ countries.</p><h3>Key Features</h3><ul><li>Real-time GPS tracking integration</li><li>Automated route optimization</li><li>Predictive analytics for delivery times</li><li>Multi-language support</li></ul>',
                'image' => 'portfolio-analytics',
                'tags' => ['Vue.js', 'Laravel', 'Google Maps API'],
                'color' => 'blue'
            ],
            [
                'title' => 'Manufacturing SOP Portal',
                'slug' => 'manufacturing-sop-portal',
                'category' => 'Web Platforms',
                'description' => 'Digitized standard operating procedures with video guides and compliance tracking for a factory floor.',
                'content' => '<h2>Project Overview</h2><p>Transformed paper-based SOPs into an interactive digital platform with video tutorials and compliance tracking.</p><h3>Impact</h3><ul><li>Reduced training time by 60%</li><li>Improved compliance rates to 98%</li><li>Eliminated paper waste</li></ul>',
                'image' => 'portfolio-automation',
                'tags' => ['React', 'Node.js', 'AWS S3'],
                'color' => 'indigo'
            ],
            [
                'title' => 'HR Onboarding Automation',
                'slug' => 'hr-onboarding-automation',
                'category' => 'System Automation',
                'description' => 'Automated entire employee onboarding process, integrating with payroll and slack, reducing manual work by 90%.',
                'content' => '<h2>Project Overview</h2><p>Streamlined the entire employee onboarding workflow through intelligent automation and integration.</p><h3>Automation Features</h3><ul><li>Automated document collection</li><li>Payroll system integration</li><li>Slack workspace provisioning</li><li>Equipment request automation</li></ul>',
                'image' => 'portfolio-ai',
                'tags' => ['Python', 'Zapier', 'Slack API'],
                'color' => 'orange'
            ],
            [
                'title' => 'Retail Data Warehouse',
                'slug' => 'retail-data-warehouse',
                'category' => 'Data Engineering',
                'description' => 'Unified data warehouse solution aggregating sales data from 500+ stores for real-time reporting.',
                'content' => '<h2>Project Overview</h2><p>Built a scalable data warehouse that processes millions of transactions daily from retail locations worldwide.</p><h3>Technical Highlights</h3><ul><li>Real-time data ingestion</li><li>Advanced analytics dashboards</li><li>Predictive inventory modeling</li><li>Custom reporting engine</li></ul>',
                'image' => 'portfolio-analytics',
                'tags' => ['Snowflake', 'Dbt', 'PowerBI'],
                'color' => 'emerald'
            ],
            [
                'title' => 'Legal Archive Search',
                'slug' => 'legal-archive-search',
                'category' => 'Web Platforms',
                'description' => 'OCR-enabled archive system for a law firm, making 50 years of case files searchable.',
                'content' => '<h2>Project Overview</h2><p>Digitized and indexed decades of legal documents using advanced OCR and search technology.</p><h3>Capabilities</h3><ul><li>Full-text search across scanned documents</li><li>Advanced filtering and categorization</li><li>Secure access controls</li><li>Export and citation tools</li></ul>',
                'image' => 'portfolio-automation',
                'tags' => ['OCR', 'Elasticsearch', 'Python'],
                'color' => 'purple'
            ],
            [
                'title' => 'Hybrid Cloud Migration',
                'slug' => 'hybrid-cloud-migration',
                'category' => 'Cloud Infrastructure',
                'description' => 'Comprehensive roadmap and execution of migrating on-premise servers to Azure hybrid cloud environment.',
                'content' => '<h2>Project Overview</h2><p>Led the strategic migration of enterprise infrastructure to a hybrid cloud model with zero downtime.</p><h3>Migration Phases</h3><ul><li>Infrastructure assessment and planning</li><li>Phased migration strategy</li><li>Security and compliance implementation</li><li>Performance optimization</li></ul>',
                'image' => 'portfolio-ai',
                'tags' => ['Azure', 'Hybrid Cloud', 'Security'],
                'color' => 'cyan'
            ],
            [
                'title' => 'Luxury Fashion App',
                'slug' => 'luxury-fashion-app',
                'category' => 'Mobile Apps',
                'description' => 'Native mobile application for a luxury fashion brand with AR try-on features.',
                'content' => '<h2>Project Overview</h2><p>Developed a premium mobile shopping experience with cutting-edge AR technology for virtual try-ons.</p><h3>Features</h3><ul><li>AR-powered virtual try-on</li><li>Personalized recommendations</li><li>Seamless checkout experience</li><li>Exclusive member benefits</li></ul>',
                'image' => 'portfolio-analytics',
                'tags' => ['React Native', 'Firebase', 'ARKit'],
                'color' => 'rose'
            ],
        ];
    }
}
