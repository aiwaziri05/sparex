<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('services')->truncate();
        $services = [
            [
                'title' => 'Custom Software Development',
                'description' => 'Bespoke applications built around your workflows to improve efficiency and scale with your business.',
                'icon' => 'assets/icons/laptop.svg',
                'icon_color' => 'rgba(25, 118, 210, 0.15)',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Digital SOP Systems',
                'description' => 'Digitize and standardize operating procedures to ensure consistency and compliance.',
                'icon' => 'assets/icons/checklist.svg',
                'icon_color' => 'rgba(79, 70, 229, 0.15)',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Workflow Automation',
                'description' => 'Automate repetitive processes to reduce manual effort and accelerate delivery.',
                'icon' => 'assets/icons/cog.svg',
                'icon_color' => 'rgba(255, 152, 0, 0.15)',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Data Management',
                'description' => 'Secure data pipelines, storage, and governance for reliable insights.',
                'icon' => 'assets/icons/database.svg',
                'icon_color' => 'rgba(16, 185, 129, 0.15)',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Document Digitalization',
                'description' => 'Transform paper-based processes into searchable, auditable digital records.',
                'icon' => 'assets/icons/document.svg',
                'icon_color' => 'rgba(79, 70, 229, 0.15)',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'IT Infrastructure Advisory',
                'description' => 'Expert guidance to design resilient, scalable, and cost-effective infrastructure.',
                'icon' => 'assets/icons/server.svg',
                'icon_color' => 'rgba(79, 70, 229, 0.15)',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
