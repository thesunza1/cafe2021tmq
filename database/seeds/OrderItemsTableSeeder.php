<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        //DB::table('order_items')->delete();

        DB::table('order_items')->insert(array (
            0 =>
            array (
                'id' => 49,
                'idDrink' => 13,
                'idOrder' => 50,
                'quantity' => 3,
                'plus' => 'duong',
                'totalPrice' => 48000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 50,
                'idDrink' => 13,
                'idOrder' => 50,
                'quantity' => 3,
                'plus' => 'duong',
                'totalPrice' => 48000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 51,
                'idDrink' => 14,
                'idOrder' => 50,
                'quantity' => 1,
                'plus' => 'duong',
                'totalPrice' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 52,
                'idDrink' => 14,
                'idOrder' => 51,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 53,
                'idDrink' => 11,
                'idOrder' => 51,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 54,
                'idDrink' => 13,
                'idOrder' => 51,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 16000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 55,
                'idDrink' => 13,
                'idOrder' => 52,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 16000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 56,
                'idDrink' => 11,
                'idOrder' => 52,
                'quantity' => 3,
                'plus' => 'duong',
                'totalPrice' => 39000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 57,
                'idDrink' => 11,
                'idOrder' => 52,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 58,
                'idDrink' => 11,
                'idOrder' => 53,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 59,
                'idDrink' => 12,
                'idOrder' => 53,
                'quantity' => 3,
                'plus' => 'jksdf',
                'totalPrice' => 36000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 60,
                'idDrink' => 11,
                'idOrder' => 53,
                'quantity' => 1,
                'plus' => 'cafe',
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 61,
                'idDrink' => 16,
                'idOrder' => 55,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 25000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 62,
                'idDrink' => 11,
                'idOrder' => 55,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 63,
                'idDrink' => 16,
                'idOrder' => 55,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 25000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 64,
                'idDrink' => 19,
                'idOrder' => 56,
                'quantity' => 3,
                'plus' => 'as',
                'totalPrice' => 42000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 65,
                'idDrink' => 14,
                'idOrder' => 56,
                'quantity' => 2,
                'plus' => 'as',
                'totalPrice' => 42000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 66,
                'idDrink' => 18,
                'idOrder' => 56,
                'quantity' => 3,
                'plus' => 'as',
                'totalPrice' => 81000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 67,
                'idDrink' => 14,
                'idOrder' => 64,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 21000,
                'created_at' => NULL,
                'updated_at' => '2021-04-16 09:33:13',
            ),
            19 =>
            array (
                'id' => 68,
                'idDrink' => 16,
                'idOrder' => 64,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 25000,
                'created_at' => NULL,
                'updated_at' => '2021-04-16 09:33:13',
            ),
            20 =>
            array (
                'id' => 69,
                'idDrink' => 17,
                'idOrder' => 64,
                'quantity' => 5,
                'plus' => NULL,
                'totalPrice' => 115000,
                'created_at' => NULL,
                'updated_at' => '2021-04-16 09:33:13',
            ),
            21 =>
            array (
                'id' => 70,
                'idDrink' => 11,
                'idOrder' => 58,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 71,
                'idDrink' => 19,
                'idOrder' => 58,
                'quantity' => 4,
                'plus' => 'sdfsdf',
                'totalPrice' => 56000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 72,
                'idDrink' => 11,
                'idOrder' => 58,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 73,
                'idDrink' => 11,
                'idOrder' => 58,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 74,
                'idDrink' => 14,
                'idOrder' => 59,
                'quantity' => 3,
                'plus' => NULL,
                'totalPrice' => 63000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 75,
                'idDrink' => 19,
                'idOrder' => 59,
                'quantity' => 3,
                'plus' => NULL,
                'totalPrice' => 42000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 76,
                'idDrink' => 11,
                'idOrder' => 59,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 77,
                'idDrink' => 11,
                'idOrder' => 61,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => '2021-04-16 09:33:54',
            ),
            29 =>
            array (
                'id' => 78,
                'idDrink' => 11,
                'idOrder' => 61,
                'quantity' => 5,
                'plus' => NULL,
                'totalPrice' => 65000,
                'created_at' => NULL,
                'updated_at' => '2021-04-16 09:33:54',
            ),
            30 =>
            array (
                'id' => 79,
                'idDrink' => 11,
                'idOrder' => 61,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => '2021-04-16 09:33:54',
            ),
            31 =>
            array (
                'id' => 80,
                'idDrink' => 11,
                'idOrder' => 61,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => '2021-04-16 09:33:54',
            ),
            32 =>
            array (
                'id' => 81,
                'idDrink' => 11,
                'idOrder' => 61,
                'quantity' => 3,
                'plus' => NULL,
                'totalPrice' => 39000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array (
                'id' => 82,
                'idDrink' => 17,
                'idOrder' => 61,
                'quantity' => 3,
                'plus' => NULL,
                'totalPrice' => 69000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array (
                'id' => 83,
                'idDrink' => 18,
                'idOrder' => 61,
                'quantity' => 3,
                'plus' => NULL,
                'totalPrice' => 81000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array (
                'id' => 84,
                'idDrink' => 11,
                'idOrder' => 64,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => '2021-04-16 09:33:13',
            ),
            36 =>
            array (
                'id' => 85,
                'idDrink' => 14,
                'idOrder' => 64,
                'quantity' => 4,
                'plus' => 'lhukgkg',
                'totalPrice' => 84000,
                'created_at' => NULL,
                'updated_at' => '2021-04-16 09:33:13',
            ),
            37 =>
            array (
                'id' => 86,
                'idDrink' => 11,
                'idOrder' => 64,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => '2021-04-16 09:33:13',
            ),
            38 =>
            array (
                'id' => 87,
                'idDrink' => 11,
                'idOrder' => 63,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array (
                'id' => 88,
                'idDrink' => 14,
                'idOrder' => 63,
                'quantity' => 4,
                'plus' => 'tham',
                'totalPrice' => 84000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array (
                'id' => 89,
                'idDrink' => 11,
                'idOrder' => 65,
                'quantity' => 4,
                'plus' => NULL,
                'totalPrice' => 52000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array (
                'id' => 90,
                'idDrink' => 17,
                'idOrder' => 65,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 23000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array (
                'id' => 91,
                'idDrink' => 18,
                'idOrder' => 65,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 27000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array (
                'id' => 92,
                'idDrink' => 11,
                'idOrder' => 66,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array (
                'id' => 93,
                'idDrink' => 17,
                'idOrder' => 66,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 23000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array (
                'id' => 94,
                'idDrink' => 14,
                'idOrder' => 66,
                'quantity' => 4,
                'plus' => NULL,
                'totalPrice' => 84000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array (
                'id' => 95,
                'idDrink' => 11,
                'idOrder' => 67,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array (
                'id' => 96,
                'idDrink' => 18,
                'idOrder' => 67,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 27000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array (
                'id' => 97,
                'idDrink' => 19,
                'idOrder' => 67,
                'quantity' => 4,
                'plus' => NULL,
                'totalPrice' => 56000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array (
                'id' => 98,
                'idDrink' => 11,
                'idOrder' => 68,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array (
                'id' => 99,
                'idDrink' => 11,
                'idOrder' => 68,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array (
                'id' => 100,
                'idDrink' => 14,
                'idOrder' => 68,
                'quantity' => 3,
                'plus' => NULL,
                'totalPrice' => 63000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array (
                'id' => 101,
                'idDrink' => 13,
                'idOrder' => 68,
                'quantity' => 2,
                'plus' => NULL,
                'totalPrice' => 32000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array (
                'id' => 102,
                'idDrink' => 11,
                'idOrder' => 69,
                'quantity' => 1,
                'plus' => NULL,
                'totalPrice' => 13000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
