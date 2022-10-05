<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([

        [
            'name' => 'кросівки',
            'articul'  => '123',

            'brand'  => 'adidas',
            'price'  => '1199',
            'image_path'=> '251094594.jpg',


            'category_id'=>'3',

            'created_at'=>now(),
            'updated_at'=>now()
        ],
            [
                'name' => 'джинси',
                'articul'  => '124',
                'brand'  => 'Levis',
                'price'  => '1999',
                'image_path'=> '240135543.jpg',

                'category_id'=>'1',

                'created_at'=>now(),
                'updated_at'=>now()

            ],
            [
                'name' => 'polo',
                'articul'  => '125',
                'brand'  => 'Marks & Spencer',
                'price'  => '899',
                'image_path'=> '265922322.jpg',

                'category_id'=>'1',

                'created_at'=>now(),
                'updated_at'=>now()
            ],

                [
                    'name' => 'trusiki',
                    'articul'  => '12-13',
                    'brand'  => 'Victorias Secret',
                    'price'  => '899',
                    'image_path'=> '138010182.jpg',

                    'category_id'=>'2',

                    'created_at'=>now(),
                    'updated_at'=>now()
                ],

                [
                    'name' => 'pantaloni',
                    'articul'  => '126',
                    'brand'  => 'kleo',
                    'price'  => '699',
                    'image_path'=> 'pantaloni-60221888.jpg',

                    'category_id'=>'2',

                    'created_at'=>now(),
                    'updated_at'=>now()
                ],
                [
                    'name' => 'trusishki',
                    'articul'  => '12-12',
                    'brand'  => 'Marks & Spencer',
                    'price'  => '999',
                    'image_path'=> '223922850.jpg',

                    'category_id'=>'2',

                    'created_at'=>now(),
                    'updated_at'=>now()
                ],
               ]
        );
    }
}
