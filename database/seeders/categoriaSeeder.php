<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categoria;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Define tus unidades personalizadas y sus valores aquí
         $Categorias = [
            1 => ['Sin especificación' ],
            2 => ['Lacteos'],
            3 => ['Frutas'],
            4 => ['Productos Panadería'],
            5 => ['Enlatados'],
            6 => ['Liquidos'],
            7 => ['Condimentos'],
            8 => ['Productos de Limpieza'],
            9 => ['Equipos Negocio'],
            10 => ['Helados'],
            11 => ['Productos Pasteleria'],
            12 => ['Untables'],
            13 => ['Café']
        ];

        // Almacena los nombres de las unidades para evitar duplicados
        $CategoriasNames = [];

        foreach ($Categorias as $cat => $value) {
            // Comprueba si la unidad ya se ha creado
            if (!in_array($cat, $CategoriasNames)) {
                // Crea un registro de unidad
                categoria::factory()->create([
                    'id' => $cat,
                    'nombre_categoria' => $value[0],

                ]);
                // Agrega el nombre de la unidad al array para evitar duplicados
                $CategoriasNames[] = $cat;
            }
        }

    }
}
