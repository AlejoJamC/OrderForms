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
        $this->call(CitiesTableSeeder::class);
        $this->call(OrderStatesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
    }
}
