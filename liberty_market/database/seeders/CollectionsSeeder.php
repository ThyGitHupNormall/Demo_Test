<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('collections')->insert([
            'title' => 'Bored App',
            'collection' => '380/394',
            'category' => 'Blockchain',
            'img' => "collection-01.jpg",
        ]);
        DB::table('collections')->insert([
            'title' => 'Bored App',
            'collection' => '380/394',
            'category' => 'Blockchain',
            'img' => "collection-01.jpg",
        ]);
    }
}
