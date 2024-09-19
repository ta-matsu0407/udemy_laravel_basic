<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Shop;
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
        $this->call([
            TestSeeder::class,
            UserSeeder::class,
            AreaSeeder::class, //親から先に記載する
            ShopSeeder::class,
            RouteSeeder::class,
            RouteShopSeeder::class
        ]);
        \App\Models\ContactForm::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
