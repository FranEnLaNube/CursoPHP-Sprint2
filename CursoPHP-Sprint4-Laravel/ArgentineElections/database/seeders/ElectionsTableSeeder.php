<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Election;

class ElectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $electionsData = [
            ['date' => '1983-10-30'],
            ['date' => '1989-05-14'],
            ['date' => '1995-05-14'],
            ['date' => '1999-10-24'],
            ['date' => '2002-04-27'],
            ['date' => '2003-04-27'],
            ['date' => '2007-10-28'],
            ['date' => '2011-10-23'],
            ['date' => '2015-11-22'],
            ['date' => '2019-10-27'],
        ];

        foreach ($electionsData as $electionData) {
            Election::create($electionData);
        }
    }
}
