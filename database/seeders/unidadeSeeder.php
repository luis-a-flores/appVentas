<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\unidad;

class unidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        unidad::query()->delete();

        // Define tus unidades personalizadas y sus valores aquí
        $units = [
            'Kilos' => [1, 'kg' ],
            'Litros' => [2, 'L'],
            'Gramos' => [3, 'g' ],
            'Mililitro' => [4, 'mL'],
            'Caja' => [5, 'cja'],
            'Pieza' => [6, 'pz'],
            'Bulto' => [7, 'bl'],
        ];

        $unitNames = [];

        foreach ($units as $unit => $value) {
            // Comprueba si la unidad ya se ha creado
            if (!in_array($unit, $unitNames)) {
                // Crea un registro de unidad
                unidad::factory()->create([
                    'id' => $value[0],
                    'nombre' => $unit,
                    'abreviatura' => $value[1],

                ]);
                // Agrega el nombre de la unidad al array para evitar duplicados
                $unitNames[] = $unit;
            }
        }

        //
    }
}
