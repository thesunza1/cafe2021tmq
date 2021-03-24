<?php

use Illuminate\Database\Seeder;
use App\Status; // su dung model status

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Status::insert([
            'image' => 'img/status/none.png',
            'status' => 'ban trong ' ,
        ]);
        Status::insert([
            'image' => 'img/status/have.png',
            'status' => 'dang dat' ,
        ]);
        Status::insert([
            'image' => 'img/status/group.png',
            'status' => 'ban nhom' ,
        ]);
    }
}
