<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::firstOrCreate([
            "name"          => "yoghurt",
            "count"         => 2,
            "department_id" => 1
        ]);
        Product::firstOrCreate([
            "name"          => "mad",
            "count"         => 3,
            "department_id" => 1
        ]);
        Product::firstOrCreate([
            "name"          => "fisk",
            "count"         => 5,
            "department_id" => 1
        ]);
        Product::firstOrCreate([
            "name"          => "høns",
            "count"         => 6,
            "department_id" => 1
        ]);
        Product::firstOrCreate([
            "name"          => "banan",
            "count"         => 7,
            "department_id" => 1
        ]);
        Product::firstOrCreate([
            "name"          => "pære",
            "count"         => 8,
            "department_id" => 1
        ]);
        Product::firstOrCreate([
            "name"          => "æble",
            "count"         => 5,
            "department_id" => 1
        ]);
    }
}
