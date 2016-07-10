<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: avoid only spanish seeds
        $roles = ['Usuario','Administrador','Supervisor'];

        array_map(function ($name){
            DB::table('roles')->insert([
               'name' => $name,
            ]);
        }, $roles);
    }
}
