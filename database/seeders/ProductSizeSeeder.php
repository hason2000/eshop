<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_size')->insert([
            'product_id' => rand(1, 500),
            'si'
        ]);
    }
}
