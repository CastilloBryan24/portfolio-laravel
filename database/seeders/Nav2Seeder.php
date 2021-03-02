<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nav2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nav2s')->insert(
            [
                [
                    "class" => "active",
                    "link" => "/",
                    "name" => "Home"
                ],
                [
                    "class" => "",
                    "link" => "/about",
                    "name" => "About"
                ],
                [
                    "class" => "",
                    "link" => "/resume",
                    "name" => "Resume"
                ],
                [
                    "class" => "",
                    "link" => "/portfolio",
                    "name" => "Portfolio"
                ],
                [
                    "class" => "",
                    "link" => "/contact",
                    "name" => "Contact"
                ],
            ]
        );
    }
}
