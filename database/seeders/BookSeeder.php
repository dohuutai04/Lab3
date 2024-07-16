<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<10; $i++){
            DB::table('books')->insert([
                'title' => $faker->text(25),
                'thumbnail' => 'https://toanmath.com/wp-content/uploads/2024/02/sach-giao-khoa-toan-12-tap-1-ket-noi-tri-thuc-voi-cuoc-song.png',
                'author' => $faker->text(25),
                'publisher' => $faker->text(25),
                'publication' => $faker->date(),
                'price' => rand(1, 100),
                'quantity' => rand(1, 1000),
                'category_id' => rand(1,4),
            ]);
        }
    }
}
