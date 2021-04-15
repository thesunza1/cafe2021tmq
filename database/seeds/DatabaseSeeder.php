<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UserSeeder::class);

         //$this->call(StatusSeeder::class);
         $this->call(TableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);
        $this->call(TablesTableSeeder::class);
        $this->call(WarehousesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(DrinksTableSeeder::class);
    }
}
