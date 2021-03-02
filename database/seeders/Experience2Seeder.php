<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Experience2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experience2s')->insert(
            [
                [
                    "data" => "Lead in the design, development, and implementation of the graphic, layout, and production communication materials"
                ],
                [
                    "data" => "Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project."
                ],
                [
                    "data" => "Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design"
                ],
                [
                    "data" => "Oversee the efficient use of production project budgets ranging from $2,000 - $25,000"
                ]
            ]
        );
    }
}
