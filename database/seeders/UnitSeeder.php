<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->insert([
            [
                'code' => '1',
                'name' => 'Kilogram'
            ],
            [
                'code' => '2',
                'name' => 'Pack'
            ],
            [
                'code' => '3',
                'name' => 'Buah'
            ],
            [
                'code' => '4',
                'name' => 'Liter'
            ],
            [
                'code' => '5',
                'name' => 'Meter'
            ],
            [
                'code' => '6',
                'name' => 'Meter per segi'
            ],
            [
                'code' => '7',
                'name' => 'Persen'
            ],
        ]);
    }
}
