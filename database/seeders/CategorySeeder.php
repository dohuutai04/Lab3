<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                ['name'=>'Sách dạy làm giàu'],
                ['name'=>'Sách giáo khoa'],
                ['name'=>'Sách gữ Văn 11'],
                ['name'=>'Sách toán 12'],
                ['name'=>'Sách tiếng anh 10']
            ]
        );
    }
}
