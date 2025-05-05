<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstatusExpedientes;

class EstatusExpedientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstatusExpedientes::insert([
            ['nombre_estatus' => 'Abierto','created_at'=> now(),'updated_at'=>now()],
            ['nombre_estatus' => 'En proceso','created_at'=> now(),'updated_at'=>now()],
            ['nombre_estatus' => 'Concluído','created_at'=> now(),'updated_at'=>now()],
         ]);
    }
}
