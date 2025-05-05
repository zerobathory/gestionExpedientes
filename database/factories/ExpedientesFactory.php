<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EstatusExpedientes;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expedientes>
 */
class ExpedientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_expediente' => fake()->unique()->numerify('#####'),
            'asunto' => fake()->words(3, true),
            'fecha_inicio' => fake()->dateTime(),
            'id_estatus' => EstatusExpedientes::all()->random()->idestatus_expedientes,
            'id_usuario_registra' => User::all()->random()->id,
        ];
    }
}
