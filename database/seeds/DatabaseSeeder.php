<?php

use Illuminate\Database\Seeder;
use UserInfosTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserInfosTableSeeder::class);
    }
}
