<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'username' => 'user1',
                'password' => '$2y$10$mNhXk6F7.nPzcdus0FPTwOufmIjUQuRXscY6DLxAS5ed/ahqqpln.',
                'name' => 'user1',
                'phone' => '012345678',
                'role_id' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'username' => 'user2',
                'password' => '$2y$10$vlP5Z7AQepfnSmR2jwWZHehEQexDBj5Bgrsyf26MThp5i1/eSjQzK',
                'name' => 'user2',
                'phone' => '012345678',
                'role_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-03-15 10:06:35',
                'updated_at' => '2021-03-15 10:06:35',
            ),
            2 => 
            array (
                'id' => 4,
                'username' => 'user3',
                'password' => '$2y$10$K1W5EgBZYJXqzsXQ6ZG4h.BmH9U5b/4fmnzsZI63pMDMXrhP4384y',
                'name' => 'user3',
                'phone' => '012345678',
                'role_id' => 0,
                'remember_token' => NULL,
                'created_at' => '2021-03-15 10:06:35',
                'updated_at' => '2021-03-15 10:06:35',
            ),
        ));
        
        
    }
}