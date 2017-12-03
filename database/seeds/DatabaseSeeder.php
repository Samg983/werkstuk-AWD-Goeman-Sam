<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Juiste volgorde!
        $this->call(RoleCsvTableSeeder::class);
        $this->call(UserCsvSeeder::class);
        $this->call(RoleUserTableCsvSeeder::class);
        $this->call(BlogPostCsvSeeder::class);
    }
}
