<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'title' => 'The Future of Data-Driven Decision Making',
                'description' => 'Explore how AI and machine learning are transforming how businesses make critical decisions using real-time data insights.',
                'image' => 'blog-analytics',
                'category' => 'Analytics',
                'color' => 'blue',
                'read_time' => '5 min read',
                'date' => 'Dec 5, 2024'
            ],
            [
                'title' => 'Automating Your Way to Success',
                'description' => 'Discover key automation strategies that help businesses streamline operations and reduce costs by up to 60%.',
                'image' => 'blog-automation',
                'category' => 'Best Practices',
                'color' => 'green',
                'read_time' => '7 min read',
                'date' => 'Dec 2, 2024'
            ],
            [
                'title' => 'Enterprise AI: What\'s Next in 2025',
                'description' => 'A deep dive into emerging AI technologies and how forward-thinking enterprises are preparing for the next wave.',
                'image' => 'blog-ai',
                'category' => 'Trends',
                'color' => 'amber',
                'read_time' => '6 min read',
                'date' => 'Nov 28, 2024'
            ],
            [
                'title' => 'Cybersecurity in the Age of IoT',
                'description' => 'Understanding the new security challenges posed by connected devices and how to protect your infrastructure.',
                'image' => 'blog-security',
                'category' => 'Security',
                'color' => 'red',
                'read_time' => '4 min read',
                'date' => 'Nov 20, 2024'
            ],
            [
                'title' => 'Cloud Migration Strategies',
                'description' => 'A comprehensive guide to moving your legacy systems to the cloud with minimal downtime and maximum efficiency.',
                'image' => 'blog-cloud',
                'category' => 'Infrastructure',
                'color' => 'indigo',
                'read_time' => '8 min read',
                'date' => 'Nov 15, 2024'
            ],
            [
                'title' => 'Optimizing UX for Mobile Users',
                'description' => 'Key principles for ensuring your digital products provide a seamless experience across all mobile devices.',
                'image' => 'blog-ux',
                'category' => 'Design',
                'color' => 'purple',
                'read_time' => '5 min read',
                'date' => 'Nov 10, 2024'
            ]
        ];

        return view('blog.index', compact('posts'));
    }
}
