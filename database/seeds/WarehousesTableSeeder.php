<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WarehousesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('warehouses')->delete();
        
        \DB::table('warehouses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'toName' => 'duong',
                'inquantity' => 12,
                'price' => 10000,
                'totalIn' => 120000,
                'created_at' => '2021-04-04 08:00:10',
                'updated_at' => '2021-04-04 08:00:12',
            ),
            1 => 
            array (
                'id' => 2,
                'toName' => 'chanh',
                'inquantity' => 8,
                'price' => 10000,
                'totalIn' => 80000,
                'created_at' => '2021-04-05 08:00:10',
                'updated_at' => '2021-04-04 08:00:12',
            ),
            2 => 
            array (
                'id' => 3,
                'toName' => 'dau tay',
                'inquantity' => 23,
                'price' => 5000,
                'totalIn' => 105000,
                'created_at' => '2021-04-06 08:31:34',
                'updated_at' => '2021-04-04 08:31:35',
            ),
            3 => 
            array (
                'id' => 4,
                'toName' => 'nuoc da',
                'inquantity' => 4,
                'price' => 8000,
                'totalIn' => 32000,
                'created_at' => '2021-04-04 08:32:09',
                'updated_at' => '2021-04-07 07:54:11',
            ),
            4 => 
            array (
                'id' => 5,
                'toName' => 'dfsgsfgs',
                'inquantity' => 1,
                'price' => 1000,
                'totalIn' => 1000,
                'created_at' => '2021-04-07 13:42:47',
                'updated_at' => '2021-04-07 13:42:47',
            ),
            5 => 
            array (
                'id' => 6,
                'toName' => 'hang deu',
                'inquantity' => 12,
                'price' => 50000,
                'totalIn' => 600000,
                'created_at' => '2021-04-08 07:39:40',
                'updated_at' => '2021-04-08 07:39:40',
            ),
            6 => 
            array (
                'id' => 7,
                'toName' => 'trà đá',
                'inquantity' => 33,
                'price' => 7000,
                'totalIn' => 231000,
                'created_at' => '2021-04-07 03:47:53',
                'updated_at' => '2021-04-10 03:47:53',
            ),
            7 => 
            array (
                'id' => 8,
                'toName' => 'tran chau',
                'inquantity' => 12,
                'price' => 30000,
                'totalIn' => 360000,
                'created_at' => '2021-04-10 04:21:25',
                'updated_at' => '2021-04-10 04:21:25',
            ),
        ));
        
        
    }
}