<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PFnavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('p_fnavs')->insert(
            [
                [
                    "filter" => "*",
                    "name" => "All",
                    "class" => "filter-active"
                ],
                [
                    "filter" => ".filter-app",
                    "name" => "App",
                    "class" => ""
                ],
                [
                    "filter" => ".filter-card",
                    "name" => "Card",
                    "class" => ""
                ],
                [
                    "filter" => ".filter-web",
                    "name" => "Web",
                    "class" => ""
                ]
            ]
        );
    }
}