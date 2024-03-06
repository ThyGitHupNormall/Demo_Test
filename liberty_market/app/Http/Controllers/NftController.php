<?php

namespace App\Http\Controllers;

use App\Models\NFT;
use Illuminate\Http\Request;

class NftController extends Controller
{
    public function index()
    {
        $data['title']="List All Nft";
        $data['nfts']=NFT::all();
        // dd($data['nfts']);
        return view('admin.nft.index',$data);
    }
}
