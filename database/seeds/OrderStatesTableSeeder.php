<?php

use Illuminate\Database\Seeder;

class OrderStatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: avoid only spanish seeds
        $orderState = ['Generado','En Proceso','Terminado', 'Cancelado'];

        array_map(function ($name){
            DB::table('roles')->insert([
                'name' => $name,
            ]);
        }, $orderState);
    }
}
