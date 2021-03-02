<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert(
            [

                [
                    "icone" => "icofont-rounded-right",
                    "data1" => "Birthday:",
                    "data2" => "1 May 1995"
                ],
                [
                    "icone" => "icofont-rounded-right",
                    "data1" => "Website:",
                    "data2" => "www.example.com"
                ],
                [
                    "icone" => "icofont-rounded-right",
                    "data1" => "Phone:",
                    "data2" => "+123 456 7890"
                ],
                [
                    "icone" => "icofont-rounded-right",
                    "data1" => "City:",
                    "data2" => "City : New York, USA"
                ],
                [
                    "icone" => "icofont-rounded-right",
                    "data1" => "Age:",
                    "data2" => "23"
                ],
                [
                    "icone" => "icofont-rounded-right",
                    "data1" => "Degree:",
                    "data2" => "Master"
                ],
                [
                    "icone" => "icofont-rounded-right",
                    "data1" => "PhEmailone:",
                    "data2" => "email@example.com"
                ],
                [
                    "icone" => "icofont-rounded-right",
                    "data1" => "Freelance:",
                    "data2" => "Available"
                ]
            ]
        );
    }
}
