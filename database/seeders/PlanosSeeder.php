<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planos')->insert(
            [
                [
                    "titulo" => "Gratuito",
                    "descricao" => "Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum",
                    "valor" => 0.00
                ],
                [
                    "titulo" => "Premium",
                    "descricao" => "Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum",
                    "valor" => 29.00
                ],
                [
                    "titulo" => "Gold",
                    "descricao" => "Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum",
                    "valor" => 50.00
                ],
            ]
        );
    }
}
