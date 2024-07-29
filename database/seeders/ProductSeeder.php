<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder {
    public function run() {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {  // Thêm dấu $ vào trước biến i
            Product::create([
                'name' => $faker->word,
                'img' => $faker->imageUrl(640, 480, 'products', true),
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 10, 100),
                'quantity' => $faker->numberBetween(1, 100),
                'sold' => $faker->numberBetween(1, 50),
                'views' => $faker->numberBetween(1, 100),
                'category_id' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTimeBetween('-1 month', 'now')
            ]);
        }
    }
}
