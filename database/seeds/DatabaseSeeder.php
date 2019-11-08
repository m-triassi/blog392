<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(ExperienceTypesTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(BlurbsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
    }
}
