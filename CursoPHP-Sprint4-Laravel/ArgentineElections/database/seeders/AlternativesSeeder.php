<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alternative;

class AlternativesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alternativesData = [
            [
                'name' => 'FRENTE DE TODOS',
                'presi_vice' => 'Alberto Fernández - Cristina Fernández',
            ],
            [
                'name' => 'JUNTOS POR EL CAMBIO',
                'presi_vice' => 'Mauricio Macri - Miguel Pichetto',
            ],
            [
                'name' => 'CONSENSO FEDERAL',
                'presi_vice' => 'Roberto Lavagna - Juan Urtubey',
            ],
            [
                'name' => 'FRENTE DE IZQUIERDA Y DE TRABAJADORES - UNIDAD',
                'presi_vice' => 'Nicolás Del Caño - Romina Del Pla',
            ],
            [
                'name' => 'FRENTE NOS',
                'presi_vice' => 'Juan Gomez - Cynthia Hotton',
            ],
            [
                'name' => 'UNITE POR LA LIBERTAD Y LA DIGNIDAD',
                'presi_vice' => 'José Espert - Luis Rosales',
            ], [
                'name' => 'BLANK'
            ], [
                'name' => 'SPOILED'
            ]
        ];

        foreach ($alternativesData as $alternativeData) {
            Alternative::create($alternativeData);
        }
    }
}
