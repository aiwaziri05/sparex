<?php

namespace Database\Seeders;

use App\Models\CompanyLogo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companyLogos = [
            [
                'name' => 'Microsoft',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg',
                'website_url' => null,
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Nike',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg',
                'website_url' => null,
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Google',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg',
                'website_url' => null,
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Netflix',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg',
                'website_url' => null,
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'IBM',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg',
                'website_url' => null,
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Spotify',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/6/6e/Spotify_logo_with_text.svg',
                'website_url' => null,
                'order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Apple',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/5/51/Apple_logo_black.svg',
                'website_url' => null,
                'order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Meta',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Meta-Logo.png',
                'website_url' => null,
                'order' => 8,
                'is_active' => true,
            ],
        ];

        foreach ($companyLogos as $logo) {
            CompanyLogo::create($logo);
        }
    }
}
