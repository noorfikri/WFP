<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'ANALGESIK NON NARKOTIK',
        ]);

        DB::table('categories')->insert([
            'name' => 'ANALGESIK NARKOTIK',
        ]);
    }
}
