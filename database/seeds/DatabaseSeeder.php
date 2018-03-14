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
        $this->call(UsersTableSeeder::class);
        $this->call(TypesAstreintesTableSeeder::class);
        $this->call(AstreintesTableSeeder::class);
        $this->call(TypesAgentsTableSeeder::class);
    }
}
