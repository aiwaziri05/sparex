<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            [
                'label' => 'Projects',
                'value' => '150',
                'suffix' => '+',
                'description' => 'Delivered',
                'color' => 'indigo',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'label' => 'Forecast Accuracy',
                'value' => '94',
                'suffix' => '%',
                'description' => 'AI-Driven',
                'color' => 'emerald',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'label' => 'Manual Work Reduced',
                'value' => '85',
                'suffix' => '%',
                'description' => 'With Automation',
                'color' => 'amber',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($stats as $stat) {
            Stat::create($stat);
        }
    }
}
