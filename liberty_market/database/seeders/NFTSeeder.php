<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NFTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nft')->insert([
            'title' => 'Set Up Your Wallet',
            'description' => 'NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.',
            'img' => 'icon-04.png',
        ]);
        DB::table('nft')->insert([
            'title' => 'Add Your Digital NFT',
            'description' => 'There are 5 different HTML pages included in this NFT website template. You can edit or modify any section on any page as you required.',
            'img' => 'icon-05.png',
        ]);
        DB::table('nft')->insert([
            'title' => 'Sell Your NFT & Make Profit',
            'description' => 'If you would like to support our TemplateMo website, please visit our contact page to make a PayPal contribution. Thank you.',
            'img' => 'icon-06.png',
        ]);

    }
}
