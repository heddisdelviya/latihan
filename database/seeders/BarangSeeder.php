<?php

namespace Database\Seeder;

use Illuminate\Database\Console\Seeder\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Suport\Facades\DB; //tambahkan ini

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([ 
            [
                'kode'=> 'B001' ,
                'nama'=> 'Kipas Angin' ,
                'harga'=> 150000.00 ,
                'stok'=> 100 ,
            ],
            [
                'kode'=>'B002' ,
                'nama'=> 'Televisi' ,
                'harga'=> 2000000.00 ,
                'stok'=> 50 ,
            ],
         
        ]);
        
    
    }
}
