<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Summary2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('summary2s')->insert(
            [
                [
                    "data" => "Portland par 127,Orlando, FL"
                ],
                [
                    "data" => "(123) 456-7891"
                ],
                [
                    "data" => "lice.barkley@example.com"
                ]
            ]
        );
    }
}
