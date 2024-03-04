<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categoria>
 */
class categoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
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

        // Selecciona una unidad aleatoria
        $categoria = $this->faker->randomElement(array_keys($Categorias));

        return [
            'id' => $categoria,
            'nombre_categoria' => $Categorias[$categoria][0],

        ];
    }
}
