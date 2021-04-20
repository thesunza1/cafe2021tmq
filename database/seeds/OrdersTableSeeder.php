<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        //DB::table('orders')->delete();

        DB::table('orders')->insert(array (
            0 =>
            array (
                'id' => 5,
                'totalPrices' => 104000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 6,
                'created_at' => '2021-03-20 08:58:35',
                'updated_at' => '2021-03-20 13:39:05',
            ),
            1 =>
            array (
                'id' => 6,
                'totalPrices' => 136000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 11,
                'created_at' => '2021-03-20 08:59:57',
                'updated_at' => '2021-03-20 08:59:57',
            ),
            2 =>
            array (
                'id' => 7,
                'totalPrices' => 352000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 2,
                'created_at' => '2021-03-20 13:40:20',
                'updated_at' => '2021-03-21 08:55:06',
            ),
            3 =>
            array (
                'id' => 8,
                'totalPrices' => 66000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 5,
                'created_at' => '2021-03-20 13:43:02',
                'updated_at' => '2021-03-20 13:43:02',
            ),
            4 =>
            array (
                'id' => 9,
                'totalPrices' => 88000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 14,
                'created_at' => '2021-03-21 08:50:23',
                'updated_at' => '2021-03-21 08:50:23',
            ),
            5 =>
            array (
                'id' => 10,
                'totalPrices' => 74000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 8,
                'created_at' => '2021-03-21 08:51:10',
                'updated_at' => '2021-03-21 08:51:10',
            ),
            6 =>
            array (
                'id' => 11,
                'totalPrices' => 18000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 20,
                'created_at' => '2021-03-21 08:53:23',
                'updated_at' => '2021-03-21 08:53:23',
            ),
            7 =>
            array (
                'id' => 12,
                'totalPrices' => 18000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 20,
                'created_at' => '2021-03-21 08:54:07',
                'updated_at' => '2021-03-21 08:54:07',
            ),
            8 =>
            array (
                'id' => 13,
                'totalPrices' => 126000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 7,
                'created_at' => '2021-03-21 08:54:25',
                'updated_at' => '2021-03-21 08:54:25',
            ),
            9 =>
            array (
                'id' => 15,
                'totalPrices' => 30000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 2,
                'created_at' => '2021-03-22 01:20:17',
                'updated_at' => '2021-04-08 08:05:34',
            ),
            10 =>
            array (
                'id' => 16,
                'totalPrices' => 36000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 13,
                'created_at' => '2021-03-22 06:50:10',
                'updated_at' => '2021-03-23 08:59:07',
            ),
            11 =>
            array (
                'id' => 17,
                'totalPrices' => 90000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 20,
                'created_at' => '2021-03-22 06:50:26',
                'updated_at' => '2021-04-13 08:38:22',
            ),
            12 =>
            array (
                'id' => 18,
                'totalPrices' => 108000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 28,
                'created_at' => '2021-03-23 01:00:19',
                'updated_at' => '2021-04-13 08:38:27',
            ),
            13 =>
            array (
                'id' => 19,
                'totalPrices' => 174000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 25,
                'created_at' => '2021-03-23 08:59:52',
                'updated_at' => '2021-03-23 09:00:03',
            ),
            14 =>
            array (
                'id' => 20,
                'totalPrices' => 120000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 9,
                'created_at' => '2021-03-28 12:15:58',
                'updated_at' => '2021-03-28 12:15:58',
            ),
            15 =>
            array (
                'id' => 21,
                'totalPrices' => 112000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 5,
                'created_at' => '2021-03-28 12:34:58',
                'updated_at' => '2021-03-28 12:35:41',
            ),
            16 =>
            array (
                'id' => 24,
                'totalPrices' => 54000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 5,
                'created_at' => '2021-03-28 13:08:28',
                'updated_at' => '2021-03-28 13:11:12',
            ),
            17 =>
            array (
                'id' => 25,
                'totalPrices' => 18000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 5,
                'created_at' => '2021-03-30 07:48:44',
                'updated_at' => '2021-03-30 07:49:14',
            ),
            18 =>
            array (
                'id' => 26,
                'totalPrices' => 22000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 6,
                'created_at' => '2021-03-30 07:53:57',
                'updated_at' => '2021-03-30 07:54:27',
            ),
            19 =>
            array (
                'id' => 27,
                'totalPrices' => 144000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 5,
                'created_at' => '2021-03-30 08:25:29',
                'updated_at' => '2021-03-30 08:26:43',
            ),
            20 =>
            array (
                'id' => 28,
                'totalPrices' => 210000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 7,
                'created_at' => '2021-03-30 08:26:59',
                'updated_at' => '2021-03-30 08:45:12',
            ),
            21 =>
            array (
                'id' => 31,
                'totalPrices' => 0,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 6,
                'created_at' => '2021-03-30 08:45:30',
                'updated_at' => '2021-03-30 08:53:37',
            ),
            22 =>
            array (
                'id' => 34,
                'totalPrices' => 0,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 5,
                'created_at' => '2021-03-30 08:53:46',
                'updated_at' => '2021-03-30 08:59:07',
            ),
            23 =>
            array (
                'id' => 36,
                'totalPrices' => 0,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 5,
                'created_at' => '2021-03-30 08:59:21',
                'updated_at' => '2021-03-30 09:00:53',
            ),
            24 =>
            array (
                'id' => 38,
                'totalPrices' => 0,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 8,
                'created_at' => '2021-03-30 09:01:08',
                'updated_at' => '2021-04-08 07:52:41',
            ),
            25 =>
            array (
                'id' => 39,
                'totalPrices' => 240000,
                'idUser' => 2,
                'status' => '2',
                'idTable' => 1,
                'created_at' => '2021-04-01 08:56:33',
                'updated_at' => '2021-04-13 08:38:04',
            ),
            26 =>
            array (
                'id' => 41,
                'totalPrices' => 158000,
                'idUser' => 3,
                'status' => '2',
                'idTable' => 16,
                'created_at' => '2021-04-04 01:33:42',
                'updated_at' => '2021-04-13 08:38:18',
            ),
            27 =>
            array (
                'id' => 42,
                'totalPrices' => 228000,
                'idUser' => 4,
                'status' => '2',
                'idTable' => 6,
                'created_at' => '2021-04-08 07:52:47',
                'updated_at' => '2021-04-13 08:38:30',
            ),
            28 =>
            array (
                'id' => 44,
                'totalPrices' => 18000,
                'idUser' => 4,
                'status' => '2',
                'idTable' => 3,
                'created_at' => '2021-04-08 08:05:43',
                'updated_at' => '2021-04-08 08:05:43',
            ),
            29 =>
            array (
                'id' => 45,
                'totalPrices' => 54000,
                'idUser' => 4,
                'status' => '2',
                'idTable' => 3,
                'created_at' => '2021-04-08 08:13:14',
                'updated_at' => '2021-04-08 08:13:59',
            ),
            30 =>
            array (
                'id' => 47,
                'totalPrices' => 204000,
                'idUser' => 4,
                'status' => '2',
                'idTable' => 12,
                'created_at' => '2021-04-08 08:14:07',
                'updated_at' => '2021-04-13 08:38:35',
            ),
            31 =>
            array (
                'id' => 48,
                'totalPrices' => 140000,
                'idUser' => 4,
                'status' => '2',
                'idTable' => 4,
                'created_at' => '2021-04-13 00:27:47',
                'updated_at' => '2021-04-13 08:38:09',
            ),
            32 =>
            array (
                'id' => 49,
                'totalPrices' => 76000,
                'idUser' => 4,
                'status' => '2',
                'idTable' => 17,
                'created_at' => '2021-04-13 00:28:03',
                'updated_at' => '2021-04-13 08:38:13',
            ),
            33 =>
            array (
                'id' => 50,
                'totalPrices' => 117000,
                'idUser' => 4,
                'status' => '1',
                'idTable' => 2,
                'created_at' => '2021-04-13 08:38:55',
                'updated_at' => '2021-04-13 08:38:55',
            ),
            34 =>
            array (
                'id' => 51,
                'totalPrices' => 50000,
                'idUser' => 4,
                'status' => '1',
                'idTable' => 20,
                'created_at' => '2021-04-13 08:39:08',
                'updated_at' => '2021-04-13 08:39:08',
            ),
            35 =>
            array (
                'id' => 52,
                'totalPrices' => 68000,
                'idUser' => 4,
                'status' => '1',
                'idTable' => 6,
                'created_at' => '2021-04-13 08:39:24',
                'updated_at' => '2021-04-13 08:39:24',
            ),
            36 =>
            array (
                'id' => 53,
                'totalPrices' => 62000,
                'idUser' => 4,
                'status' => '1',
                'idTable' => 22,
                'created_at' => '2021-04-13 08:39:41',
                'updated_at' => '2021-04-13 08:39:55',
            ),
            37 =>
            array (
                'id' => 54,
                'totalPrices' => 0,
                'idUser' => 4,
                'status' => '1',
                'idTable' => 3,
                'created_at' => '2021-04-13 08:40:05',
                'updated_at' => NULL,
            ),
        ));


    }
}
