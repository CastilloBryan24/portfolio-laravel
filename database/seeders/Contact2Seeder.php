<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Contact2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact2s')->insert(
            [
                [
                    "icone" => "icofont-google-map",
                    "title" => "Location:",
                    "data" => "A108 Adam Street, New York, NY 535022"
                ],
                [
                    "icone" => "icofont-envelope",
                    "title" => "Email:",
                    "data" => "info@example.com"
                ],
                [
                    "icone" => "icofont-phone",
                    "title" => "Call:",
                    "data" => "+1 5589 55488 55"
                ]
            ]
        );
    }
}
