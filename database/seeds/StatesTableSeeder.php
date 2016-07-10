<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: avoid only spanish seeds
        $states = ["Amazonas", "Antioquia", "Arauca", "Atlantico", "Bogota", "Bolivar",
            "Boyaca", "Caldas", "Caqueta", "Casanare", "Cauca", "Cesar", "Choco", "Cordoba",
            "Cundinamarca", "Guainia", "Guaviare", "Huila", "La Guajira", "Magdalena", "Meta",
            "Narino", "Norte de Santander", "Putumayo", "Quindio", "Risaralda", "San Andres y Providencia",
            "Santander", "Sucre", "Tolima", "Valle del Cauca", "Vaupes", "Vichada"];

        array_map(function ($name){
            DB::table('roles')->insert([
                'name' => $name,
            ]);
        }, $states);
    }
}
