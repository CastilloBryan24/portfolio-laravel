<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert(
            [
                [
                    "name" => "Senior graphic design specialist",
                    "date" => "2019 - Present",
                    "place" => "Experion, New York, NY"
                ],
                [
                    "name" => "Graphic design specialist",
                    "date" => "2017 - 2018",
                    "place" => "Stepping Stone Advertising, New York, NY"
                ]
            ]
        );
    }
}
