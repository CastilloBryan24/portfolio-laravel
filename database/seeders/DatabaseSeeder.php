<?php

namespace Database\Seeders;

use App\Models\Contact2;
use App\Models\Contact3;
use App\Models\Contact4;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AboutSeeder::class,
            ContactSeeder::class,
            Contact2Seeder::class,
            Contact3Seeder::class,
            Contact4Seeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            Experience2Seeder::class,
            Experience3Seeder::class,
            FooterSeeder::class,
            HomeSeeder::class,
            InfoSeeder::class,
            NavSeeder::class,
            Nav2Seeder::class,
            Nav3Seeder::class,
            PFimgSeeder::class,
            PFnavSeeder::class,
            PortfolioSeeder::class,
            ProgressSeeder::class,
            ResumeSeeder::class,
            SkillSeeder::class,
            SummarySeeder::class,
            Summary2Seeder::class
        ]);
    }
}
