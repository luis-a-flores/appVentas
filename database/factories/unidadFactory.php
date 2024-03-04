<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\unidad;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\unidad>
 */
class unidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         // Define tus unidades personalizadas y sus valores aquí
         $units = [
            'Kilos' => [1, 'kg' ],
            'Litros' => [2, 'L'],
            'Gramos' => [3, 'g' ],
            'Mililitro' => [4, 'mL'],
            'Caja' => [5, 'cja'],
            'Pieza' => [6, 'pz'],
            'Bulto' => [6, 'bl'],
        ];

        // Selecciona una unidad aleatoria
        $unit = $this->faker->randomElement(array_keys($units));

        return [
            'id' => $units[$unit][0],
            'nombre' => $unit,
            'abreviatura' => $units[$unit][1]
        ];
    }
}
