<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode' => 'B001',
                'nama' => 'Kipas Angin',
                'harga' => 150000.00,
                'stok' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B002',
                'nama' => 'Televisi',
                'harga' => 2000000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B003',
                'nama' => 'Laptop',
                'harga' => 4000000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B004',
                'nama' => 'Blender',
                'harga' => 300000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B005',
                'nama' => 'Rice cooker',
                'harga' => 2500000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B006',
                'nama' => 'Mesin Cuci',
                'harga' => 2000000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B007',
                'nama' => 'Radio',
                'harga' => 200000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B008',
                'nama' => 'Handphone',
                'harga' => 6500000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B009',
                'nama' => 'Microwave',
                'harga' => 500000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B010',
                'nama' => 'Air Fryer',
                'harga' => 3500000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B011',
                'nama' => 'Setrika',
                'harga' => 350000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B012',
                'nama' => 'AC',
                'harga' => 1200000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'B013',
                'nama' => 'Kompor',
                'harga' => 1500000.00,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
