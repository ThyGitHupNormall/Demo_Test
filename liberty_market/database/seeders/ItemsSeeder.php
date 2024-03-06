<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([

            'title' => 'Music Art Super Item',
            'img_profile' => "author.jpg",
            'username' => 'Liberty Artist',
            'current_bid' => '2.03 ETH',
            'price' => '$8,240.50',
            'end_in' => '4D 08H 15M 42S',
            'date' => 'July 24th, 2022',
            'description' => 'Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'img' => "item-details-01.jpg",
        ]);

        DB::table('items')->insert([

            'title' => 'Music Art Super Item',
            'img_profile' => "author.jpg",
            'username' => 'Liberty Artist',
            'current_bid' => '2.03 ETH',
            'price' => '$8,240.50',
            'end_in' => '4D 08H 15M 42S',
            'date' => 'July 24th, 2022',
            'description' => 'Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'img' => "item-details-01.jpg",
        ]);

        DB::table('items')->insert([

            'title' => 'Music Art Super Item',
            'img_profile' => "author.jpg",
            'username' => 'Liberty Artist',
            'current_bid' => '2.03 ETH',
            'price' => '$8,240.50',
            'end_in' => '4D 08H 15M 42S',
            'date' => 'July 24th, 2022',
            'description' => 'Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'img' => "item-details-01.jpg",
        ]);

        DB::table('items')->insert([

            'title' => 'Music Art Super Item',
            'img_profile' => "author.jpg",
            'username' => 'Liberty Artist',
            'current_bid' => '2.03 ETH',
            'price' => '$8,240.50',
            'end_in' => '4D 08H 15M 42S',
            'date' => 'July 24th, 2022',
            'description' => 'Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'img' => "item-details-01.jpg",
        ]);

        DB::table('items')->insert([

            'title' => 'Music Art Super Item',
            'img_profile' => "author.jpg",
            'username' => 'Liberty Artist',
            'current_bid' => '2.03 ETH',
            'price' => '$8,240.50',
            'end_in' => '4D 08H 15M 42S',
            'date' => 'July 24th, 2022',
            'description' => 'Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'img' => "item-details-01.jpg",
        ]);

        DB::table('items')->insert([

            'title' => 'Music Art Super Item',
            'img_profile' => "author.jpg",
            'username' => 'Liberty Artist',
            'current_bid' => '2.03 ETH',
            'price' => '$8,240.50',
            'end_in' => '4D 08H 15M 42S',
            'date' => 'July 24th, 2022',
            'description' => 'Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'img' => "item-details-01.jpg",
        ]);

    }
}
