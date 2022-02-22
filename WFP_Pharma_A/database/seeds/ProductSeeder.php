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
            'name' => 'Ibuprofen',
            'price' => 40000,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Parasetamol',
            'price' => 20000,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Fentanil',
            'price' => 50000,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Kodein',
            'price' => 120000,
            'category_id' => 2,
        ]);
    }
}
