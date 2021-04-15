<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_items')->delete();
        
        \DB::table('order_items')->insert(array (
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
        ));
        
        
    }
}