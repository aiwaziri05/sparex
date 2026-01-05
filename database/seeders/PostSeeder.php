<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'slug' => 'future-of-data-driven-decisions',
                'title' => 'The Future of Data-Driven Decision Making',
                'description' => 'Explore how AI and machine learning are transforming how businesses make critical decisions using real-time data insights.',
                'content' => '<h2>Why Data-Driven Matters</h2><p>Enterprises that place data at the heart of decision making outperform peers by reacting faster and testing ideas with confidence.</p><h3>What We Cover</h3><ul><li>Building a single source of truth</li><li>Setting up near real-time dashboards</li><li>When to automate vs. when to keep a human in the loop</li></ul><p>Pair these practices with clear ownership and lightweight governance to keep teams moving.</p>',
                'image' => 'blog-analytics',
                'category' => 'Analytics',
                'color' => 'blue',
                'read_time' => '5 min read',
                'author' => 'Alex Rivers',
                'tags' => ['Analytics', 'AI', 'Decision Intelligence'],
                'is_published' => true,
                'published_at' => Carbon::parse('Dec 5, 2024'),
            ],
            [
                'slug' => 'automation-for-ops',
                'title' => 'Automating Your Way to Success',
                'description' => 'Discover key automation strategies that help businesses streamline operations and reduce costs by up to 60%.',
                'content' => '<h2>Automation That Sticks</h2><p>Great automation starts with mapping the journey and picking the right triggers.</p><h3>Checklist</h3><ul><li>Identify repetitive handoffs</li><li>Guardrails for exceptions</li><li>Measure reclaimed time</li></ul><p>Start small, measure, and expand once a win is proven.</p>',
                'image' => 'blog-automation',
                'category' => 'Best Practices',
                'color' => 'green',
                'read_time' => '7 min read',
                'author' => 'Priya Desai',
                'tags' => ['Automation', 'Ops', 'Scaling'],
                'is_published' => true,
                'published_at' => Carbon::parse('Dec 2, 2024'),
            ],
            [
                'slug' => 'enterprise-ai-2025',
                'title' => 'Enterprise AI: What\'s Next in 2025',
                'description' => 'A deep dive into emerging AI technologies and how forward-thinking enterprises are preparing for the next wave.',
                'content' => '<h2>AI Trends to Watch</h2><p>From retrieval-augmented generation to domain-specialized copilots, AI is reshaping workflows.</p><h3>Key Moves</h3><ul><li>Invest in data quality pipelines</li><li>Pair LLMs with strong observability</li><li>Adopt a privacy-first posture</li></ul>',
                'image' => 'blog-ai',
                'category' => 'Trends',
                'color' => 'amber',
                'read_time' => '6 min read',
                'author' => 'Jamie Lee',
                'tags' => ['AI', 'LLM', 'Enterprise'],
                'is_published' => true,
                'published_at' => Carbon::parse('Nov 28, 2024'),
            ],
            [
                'slug' => 'cybersecurity-iot',
                'title' => 'Cybersecurity in the Age of IoT',
                'description' => 'Understanding the new security challenges posed by connected devices and how to protect your infrastructure.',
                'content' => '<h2>Risk Surfaces Grow</h2><p>More devices mean more entry points. Strong identity, network segmentation, and continuous monitoring are non-negotiable.</p><h3>Actionable Steps</h3><ul><li>Adopt zero-trust for device access</li><li>Automate patch management</li><li>Continuously test incident response</li></ul>',
                'image' => 'blog-security',
                'category' => 'Security',
                'color' => 'red',
                'read_time' => '4 min read',
                'author' => 'Riley Carter',
                'tags' => ['Security', 'IoT', 'Zero Trust'],
                'is_published' => true,
                'published_at' => Carbon::parse('Nov 20, 2024'),
            ],
            [
                'slug' => 'cloud-migration-strategies',
                'title' => 'Cloud Migration Strategies',
                'description' => 'A comprehensive guide to moving your legacy systems to the cloud with minimal downtime and maximum efficiency.',
                'content' => '<h2>Choosing the Right Path</h2><p>Lift-and-shift versus re-platforming depends on risk appetite, timelines, and talent.</p><h3>Playbook</h3><ul><li>Inventory and dependency mapping</li><li>Pilot migrations with rollback plans</li><li>Cost and performance baselines</li></ul>',
                'image' => 'blog-cloud',
                'category' => 'Infrastructure',
                'color' => 'indigo',
                'read_time' => '8 min read',
                'author' => 'Morgan Chen',
                'tags' => ['Cloud', 'Migration', 'Architecture'],
                'is_published' => true,
                'published_at' => Carbon::parse('Nov 15, 2024'),
            ],
            [
                'slug' => 'mobile-ux-essentials',
                'title' => 'Optimizing UX for Mobile Users',
                'description' => 'Key principles for ensuring your digital products provide a seamless experience across all mobile devices.',
                'content' => '<h2>Design for Thumbs</h2><p>Prioritize tap targets, fast feedback, and offline resilience.</p><h3>Principles</h3><ul><li>Ship responsive layouts first</li><li>Respect device performance</li><li>Instrument journeys for friction</li></ul>',
                'image' => 'blog-ux',
                'category' => 'Design',
                'color' => 'purple',
                'read_time' => '5 min read',
                'author' => 'Sara Mitchell',
                'tags' => ['UX', 'Mobile', 'Design Systems'],
                'is_published' => true,
                'published_at' => Carbon::parse('Nov 10, 2024'),
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
