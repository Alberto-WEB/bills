<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Database\Factories\ProductFactory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Product::factory(5)->create();
        Product::create([
            'name' => 'Producto 1',
            'price' => 123.45,
            'tax' => 5,
            'stock' => 1
        ]);

        Product::create([
            'name' => 'Producto 2',
            'price' => 46.65,
            'tax' => 15,
            'stock' => 1
        ]);

        Product::create([
            'name' => 'Producto 3',
            'price' => 39.73,
            'tax' => 12,
            'stock' => 1
        ]);

        Product::create([
            'name' => 'Producto 4',
            'price' => 250.00,
            'tax' => 8,
            'stock' => 1
        ]);

        Product::create([
            'name' => 'Producto 5',
            'price' => 59.35,
            'tax' => 10,
            'stock' => 1
        ]);
    }
}
