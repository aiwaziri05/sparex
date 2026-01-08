<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('testimonials')->truncate();
        $testimonials = [
            [
                'name' => 'Mark Davis',
                'position' => 'COO',
                'company' => 'Innovate Inc.',
                'testimonial' => "Sparex's platform transformed our operations. Intelligent workflows reduced errors and improved efficiency across teams.",
                'image' => 'https://randomuser.me/api/portraits/men/32.jpg',
                'color' => 'blue',
                'is_verified' => true,
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Priya Sharma',
                'position' => 'Head of Analytics',
                'company' => 'DataCorp',
                'testimonial' => "The Sparex team delivered beyond expectations. Their solutions streamlined our processes and the support was outstanding.",
                'image' => 'https://randomuser.me/api/portraits/women/44.jpg',
                'color' => 'emerald',
                'is_verified' => true,
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Lucas Meyer',
                'position' => 'CTO',
                'company' => 'FutureRetail',
                'testimonial' => "We saw a 40% reduction in manual work and more accurate business forecasts. Highly recommend their expertise!",
                'image' => 'https://randomuser.me/api/portraits/men/85.jpg',
                'color' => 'amber',
                'is_verified' => true,
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
