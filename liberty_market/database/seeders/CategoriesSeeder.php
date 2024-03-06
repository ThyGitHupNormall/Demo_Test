<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'title' => 'Blockchain',
            'img' => "icon-01.png",
        ]);
        DB::table('categories')->insert([
            'title' => 'Digital Art',
            'img' => "icon-02.png",
        ]);
        DB::table('categories')->insert([
            'title' => 'Music Art',
            'img' => "icon-03.png",
        ]);
        DB::table('categories')->insert([
            'title' => 'Virtual World',
            'img' => "icon-04.png",
        ]);
        DB::table('categories')->insert([
            'title' => 'Valuable',
            'img' => "icon-05.png",
        ]);
        DB::table('categories')->insert([
            'title' => 'Triple NFT',
            'img' => "icon-06.png",
        ]);
    }
}
