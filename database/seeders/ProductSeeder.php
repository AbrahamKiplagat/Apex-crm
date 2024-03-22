<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Product::create([
            'name' => 'Sample Product',
            'description' => 'This is a sample product description.',
            'price' => 10.99,
            'image' => $faker->imageUrl(200, 200, 'products', true)
        ]);
        Product::create([
            'name' => "Shoe",
            'description' => "This is the name of the product that I bought from a store.",
            'price' => 50.00,
            'image' => $faker->imageUrl(200, 200, 'products', true)
        ]);
        Product::create([
            'name' => "Specks",
            'description' => "This is a product description for a product with a price of 100 KSH.",
            'price' => 100.00,
            'image' => $faker->imageUrl(200, 200, 'products', true)
        ]);
        Product::create([
            'name' => 'Pepsi',
            'description' => "this is a product description for pepsi.",
            'price' => 100.00,
            'image' => $faker->imageUrl(200, 200, 'products', true)
        ]);
        Product::create([
            'name' => "Lip Stick",
                'description' => "This is the name of the product that I bought from a store.",
                'price' => 60.00,
                'image' => $faker->imageUrl(200, 200, 'products', true)
        ]);



        // Insert each product into the database

    }
}

        // // Seed product data
        // Product::create([
        //     'name' => 'Sample Product',
        //     'description' => 'This is a sample product description.',
        //     'price' => 10.99,
        //     'image' => 'productImages/product1.jpg'
        // ]);
        // Product::create([
        //     'name' => "Shoe",
        //     'description' => "This is the name of the product that I bought from a store.",
        //     'price' => 50.00,
        //     'image' => 'productImages/product1.jpg',
        // ]);
        // Product::create([
        //     'name' => "Specks",
        //     'description' => "This is a product description for a product with a price of 100 KSH.",
        //     'price' => 100.00,
        //     'image' => 'productImages/product2.jpg',
        // ]);
        // Product::create([
        //     'name' => 'Pepsi',
        //     'description' => "this is a product description for pepsi.",
        //     'price' => 100.00,
        //     'image' => 'productImages/product3.jpg',
        // ]);
        // Product::create([
        //     'name' => "Lip Stick",
        //         'description' => "This is the name of the product that I bought from a store.",
        //         'price' => 60.00,
        //         'image' => 'productImages/product4.jpg',
        // ]);



        // Insert each product into the database

  