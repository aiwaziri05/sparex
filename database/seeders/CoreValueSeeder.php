<?php

namespace Database\Seeders;

use App\Models\CoreValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoreValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('core_values')->truncate();
        $coreValues = [
            [
                'title' => 'Innovation',
                'description' => 'We apply creativity and emerging technologies to design smarter, future-ready digital solutions.',
                'icon_svg' => 'M13 10V3L4 14h7v7l9-11h-7z',
                'color' => 'blue',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Integrity',
                'description' => 'We operate with transparency, accountability, and trust in every client relationship.',
                'icon_svg' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                'color' => 'green',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Collaboration',
                'description' => 'We work closely with our clients as partners, aligning technology with real business goals.',
                'icon_svg' => 'M12 4.354a4 4 0 110 5.292M15 21H3a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2v14a2 2 0 01-2 2z',
                'color' => 'amber',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Excellence',
                'description' => 'We are committed to quality, precision, and performance in every solution we deliver.',
                'icon_svg' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                'color' => 'purple',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Impact',
                'description' => 'We focus on measurable results that create meaningful and lasting business value.',
                'icon_svg' => 'M13 10V3L4 14h7v7l9-11h-7z',
                'color' => 'pink',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Continuous Learning',
                'description' => 'We continuously evolve our skills to stay ahead in a rapidly changing digital landscape.',
                'icon_svg' => 'M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747c5.5 0 10-4.998 10-10.747S17.5 6.253 12 6.253z',
                'color' => 'indigo',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($coreValues as $value) {
            CoreValue::create($value);
        }
    }
}
