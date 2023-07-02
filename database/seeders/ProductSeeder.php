<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'kodebarang' => '001',
                'namabarang' => 'Meja',
                'hargabarang' => 10000000,
                'deskripsi' => 'Meja berkualitas tinggi, dengan desain modern dan minimalis.',
                'unit_id' => 3
            ],
            [
                'kodebarang' => '002',
                'namabarang' => 'Kursi',
                'hargabarang' => 550000,
                'deskripsi' => 'Kursi kualitas tinggi, terbuat dari kulit sintetis atau kain yang tahan lama dan nyaman digunakan.',
                'unit_id' => 3
            ],
            [
                'kodebarang' => '003',
                'namabarang' => 'Pensil',
                'hargabarang' => 50000,
                'deskripsi' => 'Pensil berkualitas premium, terbuat dari kayu berkualitas tinggi.',
                'unit_id' => 2
            ],

        ]);
    }
}
