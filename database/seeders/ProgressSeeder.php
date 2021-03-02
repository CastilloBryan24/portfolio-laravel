<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('progress')->insert(
            [
                [
                    "skills" => "HTML",
                    "pourcentage" => "70",
                    "aria" => "70"
                ],
                [
                    "skills" => "LARAVEL",
                    "pourcentage" => "50",
                    "aria" => "50"
                ],
                [
                    "skills" => "CSS",
                    "pourcentage" => "60",
                    "aria" => "60"
                ],
                [
                    "skills" => "BOOTSTRAP",
                    "pourcentage" => "50",
                    "aria" => "50"
                ],
                [
                    "skills" => "JAVASCRIPT",
                    "pourcentage" => "40",
                    "aria" => "40"
                ],
                [
                    "skills" => "REACT JS",
                    "pourcentage" => "30",
                    "aria" => "30"
                ]
            ]
        );
    }
}
