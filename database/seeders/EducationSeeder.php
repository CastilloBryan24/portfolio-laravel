<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert(
            [
                [
                    "name" => "Master of Fine Arts & Graphic Design",
                    "date" => "2015 - 2016",
                    "place" => "Rochester Institute of Technology, Rochester, NY",
                    "paragraph" => "Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend."
                ],
                [
                    "name" => "Bachelor of Fine Arts & Graphic Design",
                    "date" => "2010 - 2014",
                    "place" => "Rochester Institute of Technology, Rochester, NY",
                    "paragraph" => "Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit."
                ]
            ]
        );
    }
}
