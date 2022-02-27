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
        DB::table('categories')->insert([
            'name' => 'ANALGESIK NARKOTIK',
        ]);

        DB::table('categories')->insert([
            'name' => 'ANALGESIK NON NARKOTIK',
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTIPIRAI',
        ]);

        DB::table('categories')->insert([
            'name' => 'NYERI NEUROPATIK',
        ]);

        DB::table('categories')->insert([
            'name' => 'ANESTETIK LOKAL',
        ]);

        DB::table('categories')->insert([
            'name' => 'ANESTETIK UMUM dan OKSIGEN',
        ]);

        DB::table('categories')->insert([
            'name' => 'OBAT untuk PROSEDUR PRE OPERATIF',
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTIDOT dan OBAT LAIN untuk KERACUNAN KHUSUS',
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTIEPILEPSI - ANTIKONVULSI',
        ]);
    }
}
