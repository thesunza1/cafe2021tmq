<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::insert([
            'name' =>'user1',
            'username'=>'user1',
            'password' => Hash::make('user1'),
            'phone' => '012345678',
            'role_id' => 1 ,
        ]);
        User::create([
            'name' =>'user2',
            'username'=>'user2',
            'password' => Hash::make('user2'),
            'phone' => '012345678',
            'role_id' => 1 ,
        ]);
         User::create([
            'name' =>'user3',
            'username'=>'user3',
            'password' => Hash::make('user3'),
            'phone' => '012345678',
            'role_id' => 0 ,//admin
        ]);
    }
}
