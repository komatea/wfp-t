<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['nama_kategori' => 'roti']);
        DB::table('categories')->insert(['nama_kategori' => 'pudding']);
    }
}
