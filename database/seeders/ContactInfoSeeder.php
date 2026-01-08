<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('contact_infos')->truncate();
        DB::table('contact_infos')->insert([
            'email' => 'info@sparextech.com',
            'email_description' => 'We\'ll get back to you within 24 hours.',
            'phone' => '+234 817 018 0103',
            'phone_description' => 'Mon-Fri from 8am to 5pm EST.',
            'address' => 'Sour Plaza 1st Avenue Gwarimpa, FCT Abuja.',
            'address_description' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
