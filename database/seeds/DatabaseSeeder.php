<?php

use Illuminate\Database\Seeder;
use App\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Item::class, 6)->create();
    }
}
