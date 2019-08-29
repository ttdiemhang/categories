<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataInsert=[
            [
                'category_id' => 'CSD',
                'category_name' => 'Cơ sở dữ liệu',
                'moreinfo' => 'Access, Oracle',

            ],
            [
                'category_id' => 'ECO',
                'category_name' => 'Ecommerce',
                'email' => 'Sách về thương mại điện tử',

            ]
        ];
        DB::table('categories')->insert($dataInsert);
    }
}
