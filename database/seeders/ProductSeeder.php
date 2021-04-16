<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'name'=>'mobile',
                'price'=>'10000',
                'description'=>'Smart Phone with 4gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/images/gnb-global/Instaview.jpg'
            ],
            [
                'name'=>'Tv',
                'price'=>'100000',
                'description'=>'Smart TV',
                'category'=>'TV',
                'gallery'=>'https://www.lg.com/in/images/gnb-global/Instaview.jpg'
            ],
            [
                'name'=>'FAN',
                'price'=>'1020',
                'description'=>'Smart Phone with 4gb ram and much more feature',
                'category'=>'FAN',
                'gallery'=>'https://www.lg.com/in/images/gnb-global/Instaview.jpg'
            ]
        ]);
    }
}
