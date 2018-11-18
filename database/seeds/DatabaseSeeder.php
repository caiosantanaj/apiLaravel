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
        //$this->call(UsersTableSeeder::class);

        factory(\App\Model\UserType::class, 3)->create();
        factory(\App\User::class, 20)->create();
        factory(\App\Model\Category::class, 5)->create();
        factory(\App\Model\News::class, 15)->create();
        factory(\App\Model\Review::class, 10)->create();

    }
}
