<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PFimgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('p_fimgs')->insert(
            [
                [
                    "filter" => "filter-app",
                    "picture" => "portfolio-1.jpg",
                    "name1" => "App 1",
                    "name2" => "App",
                    "picture2" => "portfolio-1.jpg"
                ],
                [
                    "filter" => "filter-web",
                    "picture" => "portfolio-2.jpg",
                    "name1" => "Web 1",
                    "name2" => "Web",
                    "picture2" => "portfolio-2.jpg"
                ],
                [
                    "filter" => "filter-app",
                    "picture" => "portfolio-3.jpg",
                    "name1" => "App 2",
                    "name2" => "App",
                    "picture2" => "portfolio-3.jpg"
                ],
                [
                    "filter" => "filter-card",
                    "picture" => "portfolio-4.jpg",
                    "name1" => "Card 1",
                    "name2" => "Card",
                    "picture2" => "portfolio-4.jpg"
                ],
                [
                    "filter" => "filter-web",
                    "picture" => "portfolio-5.jpg",
                    "name1" => "Web 2",
                    "name2" => "Web",
                    "picture2" => "portfolio-5.jpg"
                ],
                [
                    "filter" => "filter-app",
                    "picture" => "portfolio-6.jpg",
                    "name1" => "App 3",
                    "name2" => "App",
                    "picture2" => "portfolio-6.jpg"
                ],
                [
                    "filter" => "filter-card",
                    "picture" => "portfolio-7.jpg",
                    "name1" => "Card 2",
                    "name2" => "Card",
                    "picture2" => "portfolio-7.jpg"
                ],
                [
                    "filter" => "filter-card",
                    "picture" => "portfolio-8.jpg",
                    "name1" => "Card 3",
                    "name2" => "Card",
                    "picture2" => "portfolio-8.jpg"
                ],
                [
                    "filter" => "filter-web",
                    "picture" => "portfolio-9.jpg",
                    "name1" => "Web 3",
                    "name2" => "Web",
                    "picture2" => "portfolio-9.jpg"
                ]
            ]
        );
    }
}
