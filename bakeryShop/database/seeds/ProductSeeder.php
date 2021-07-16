<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama_produk' => 'Roti Tawar',
            'stok'=>'50',
            'harga_produk'=> 10000,
            'harga_jual'=>12000,
            'category_id'=>1,
            'supplier_id'=>1
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Roti Sosis',
            'stok'=>'25',
            'harga_produk'=> 7000,
            'harga_jual'=>10000,
            'category_id'=>1,
            'supplier_id'=>1
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Pannacota',
            'stok'=>'10',
            'harga_produk'=> 20000,
            'harga_jual'=>25000,
            'category_id'=>2,
            'supplier_id'=>2
        ]);
    }
}
