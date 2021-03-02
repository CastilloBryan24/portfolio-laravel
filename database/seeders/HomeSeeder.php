<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert(
            [
                "title" => "Castillo Bryan",
                "subtitle" => "I'm a web developer from Brussels",
                "link" => "/about",
                "button" => "about me"
            ]
        );
    }
}
