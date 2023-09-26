<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provincesData = [
            ['name' => 'CABA'],
            ['name' => 'Buenos Aires'],
            ['name' => 'Catamarca'],
            ['name' => 'Chaco'],
            ['name' => 'Chubut'],
            ['name' => 'Córdoba'],
            ['name' => 'Corrientes'],
            ['name' => 'Entre Ríos'],
            ['name' => 'Formosa'],
            ['name' => 'Jujuy'],
            ['name' => 'La Pampa'],
            ['name' => 'La Rioja'],
            ['name' => 'Mendoza'],
            ['name' => 'Misiones'],
            ['name' => 'Neuquén'],
            ['name' => 'Río Negro'],
            ['name' => 'Salta'],
            ['name' => 'San Juan'],
            ['name' => 'San Luis'],
            ['name' => 'Santa Cruz'],
            ['name' => 'Santa Fe'],
            ['name' => 'Santiago del Estero'],
            ['name' => 'Tierra del Fuego'],
            ['name' => 'Tucumán'],
        ];

        foreach ($provincesData as $provinceData) {
            Province::create($provinceData);
        }
    }
}
