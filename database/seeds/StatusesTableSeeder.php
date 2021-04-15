<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statuses')->delete();
        
        \DB::table('statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'img/status/none.png',
                'status' => 'ban trong ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'img/status/have.png',
                'status' => 'dang dat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'img/status/group.png',
                'status' => 'ban nhom',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}