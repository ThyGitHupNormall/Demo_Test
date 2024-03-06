<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categories;
use App\Models\HomeHeading;
use Illuminate\Database\Seeder;
use Database\Seeders\CreateUsersSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CategoriesSeeder::class,
            CollectionsSeeder::class,
            HomeHeadingSeeder::class,
            SlideSeeder::class,
            NFTSeeder::class,
            ItemsSeeder::class,
            CreateUsersSeeder::class,




        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
