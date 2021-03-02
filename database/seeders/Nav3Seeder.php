<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nav3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nav3s')->insert(
            [
                [
                    "link" => "https://twitter.com/",
                    "icone" => "icofont-twitter"
                ],
                [
                    "link" => "https://www.facebook.com/",
                    "icone" => "icofont-facebook"
                ],
                [
                    "link" => "https://www.instagram.com/",
                    "icone" => "icofont-instagram"
                ],
                [
                    "link" => "https://www.linkedin.com/",
                    "icone" => "icofont-linkedin"
                ]
            ]
        );
    }
}
