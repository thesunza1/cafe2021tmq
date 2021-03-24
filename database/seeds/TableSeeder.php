<?php

use Illuminate\Database\Seeder;
use App\Table;
class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Table::create([
            'idStatus' => 1,
            'addTable' => '',
        ]);
        Table::create([
            'idStatus' => 1,
            'addTable' => '',
        ]);
        Table::create([
            'idStatus' => 1,
            'addTable' => '',
        ]);
        Table::create([
            'idStatus' => 2,
            'addTable' => '',
        ]);

    }
}
