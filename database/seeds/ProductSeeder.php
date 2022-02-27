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
            'name' => 'Fentanil Injeksi 0.05 mg/mL (i.m/i.v)',
            'form' => 'Injeksi',
            'description' => 'Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi',
            'restriction' => '5 amp/kasus',
            'FK2' => true,
            'FK3' => true,
            'price' => 500000,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Fentanil Patch 12.5 mcg/jam',
            'form' => 'Patch',
            'description' => 'Untuk nyeri kronik pada pasien kanker yang tidak terkendali, Tidak untuk nyeri akut',
            'restriction' => '10 patch/bulan',
            'FK2' => true,
            'FK3' => true,
            'price' => 250000,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Fentanil Patch 25 mcg/jam',
            'form' => 'Patch',
            'description' => 'Untuk nyeri kronik pada pasien kanker yang tidak terkendali, Tidak untuk nyeri akut',
            'restriction' => '10 patch/bulan',
            'FK2' => true,
            'FK3' => true,
            'price' => 400000,
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Asam Mefenamat Kapsul 250 mg',
            'form' => 'Kapsul',
            'description' => '',
            'restriction' => '30 kapsul/bulan',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 40000,
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Asam Mefenamat Tabs 500 mg',
            'form' => 'Tablet',
            'description' => '',
            'restriction' => '30 tab/bulan',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 50000,
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Parasetamol Tab Tabs 500 mg',
            'form' => 'Tablet',
            'description' => '',
            'restriction' => '30 tab/bulan',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 50000,
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Alopurinol Tab 100 mg',
            'form' => 'Tablet',
            'description' => 'Tidak diberikan pada saat nyeri akut',
            'restriction' => '30 tab/bulan',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 40000,
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => 'Alopurinol Tab 300 mg',
            'form' => 'Tablet',
            'description' => 'Tidak diberikan pada saat nyeri akut',
            'restriction' => '30 tab/bulan',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 50000,
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => 'Kolkisin Tab 500 mcg',
            'form' => 'Tablet',
            'description' => '',
            'restriction' => '30 tab/bulan',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 50000,
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => 'Amitriptilin Tab 25 mg',
            'form' => 'Tablet',
            'description' => '',
            'restriction' => '30 tab/bulan',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 55000,
            'category_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => 'Gabapentin Kapsul 100 mg',
            'form' => 'Tablet',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
            'restriction' => '60 tab/bulan',
            'FK2' => true,
            'FK3' => true,
            'price' => 25000,
            'category_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => 'Gabapentin Kapsul 300 mg',
            'form' => 'Tablet',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
            'restriction' => '30 tab/bulan',
            'FK2' => true,
            'FK3' => true,
            'price' => 35000,
            'category_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => 'Bupivakain Injeksi 0.5%',
            'form' => 'Injeksi',
            'description' => '',
            'restriction' => '',
            'FK2' => true,
            'FK3' => true,
            'price' => 350000,
            'category_id' => 5,
        ]);

        DB::table('products')->insert([
            'name' => 'Bupivakain Heavy Injeksi 0.5% + Glukosa 8%',
            'form' => 'Injeksi',
            'description' => '',
            'restriction' => '',
            'FK2' => true,
            'FK3' => true,
            'price' => 650000,
            'category_id' => 5,
        ]);

        DB::table('products')->insert([
            'name' => 'Etil Klorida Spray 100 mL',
            'form' => 'Spray',
            'description' => '',
            'restriction' => '',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 65000,
            'category_id' => 5,
        ]);

        DB::table('products')->insert([
            'name' => 'Deksmedetomidin Injeksi 100 mcg/mL',
            'form' => 'Injeksi',
            'description' => 'Untuk sedasi pada pasied di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama',
            'restriction' => '',
            'FK2' => true,
            'FK3' => true,
            'price' => 550000,
            'category_id' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Ketamin Injeksi 50 mg/mL (i.v.)',
            'form' => 'Injeksi',
            'description' => '',
            'restriction' => '',
            'FK2' => true,
            'FK3' => true,
            'price' => 700000,
            'category_id' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Ketamin Injeksi 100 mg/mL (i.v.)',
            'form' => 'Injeksi',
            'description' => '',
            'restriction' => '',
            'FK2' => true,
            'FK3' => true,
            'price' => 750000,
            'category_id' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Atropin Injeksi 0.25 mg/mL (i.v./s.k.)',
            'form' => 'Injeksi',
            'description' => '',
            'restriction' => '',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 250000,
            'category_id' => 7,
        ]);

        DB::table('products')->insert([
            'name' => 'Diazepam Injeksi 5 mg/mL',
            'form' => 'Injeksi',
            'description' => '',
            'restriction' => '',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 200000,
            'category_id' => 7,
        ]);

        DB::table('products')->insert([
            'name' => 'Midazolam Injeksi 1 mg/mL (i.v.)',
            'form' => 'Injeksi',
            'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum',
            'restriction' => 'Dosis rumatan 1 mg/jam (24 mg/hari), Dosis premedikasi 8 vial/kasus',
            'FK2' => true,
            'FK3' => true,
            'price' => 450000,
            'category_id' => 7,
        ]);

        DB::table('products')->insert([
            'name' => 'Deksametason Injeksi 5 mg/mL',
            'form' => 'Injeksi',
            'description' => '',
            'restriction' => '20 mg/hari',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 100000,
            'category_id' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Difenhidramin Injeksi 10 mg/mL (i.v./i.m.)',
            'form' => 'Injeksi',
            'description' => '',
            'restriction' => '30 mg/hari',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 75000,
            'category_id' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Epinefrin (Adrenalin) Injeksi 1 mg/mL',
            'form' => 'Injeksi',
            'description' => '',
            'restriction' => '',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 125000,
            'category_id' => 8,
        ]);

        DB::table('products')->insert([
            'name' => 'Atropin Tab 0.5 mg',
            'form' => 'Tablet',
            'description' => '',
            'restriction' => '',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 50000,
            'category_id' => 9,
        ]);

        DB::table('products')->insert([
            'name' => 'Atropin Injeksi 0.25 mg/mL (i.v.)',
            'form' => 'Injeksi',
            'description' => '',
            'restriction' => '',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 250000,
            'category_id' => 9,
        ]);

        DB::table('products')->insert([
            'name' => 'Fenitoin Kapsul 30 mg',
            'form' => 'Kapsul',
            'description' => '',
            'restriction' => '90 kapsul/bulan',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 25000,
            'category_id' => 10,
        ]);

        DB::table('products')->insert([
            'name' => 'Fenitoin Kapsul 100 mg',
            'form' => 'Kapsul',
            'description' => '',
            'restriction' => '120 kapsul/bulan',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 35000,
            'category_id' => 10,
        ]);

        DB::table('products')->insert([
            'name' => 'Fenitoin Kapsul 50 mg/mL',
            'form' => 'Injeksi',
            'description' => 'Dapat digunakan untuk status kovulsius',
            'restriction' => 'Untuk status epileptikus dapat diberikan hingga dosis 15-30 mg/kg BB di Faskes Tk. 2 dan 3',
            'FK1' => true,
            'FK2' => true,
            'FK3' => true,
            'price' => 85000,
            'category_id' => 10,
        ]);
    }
}
