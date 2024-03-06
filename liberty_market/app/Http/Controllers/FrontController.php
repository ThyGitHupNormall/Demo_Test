<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\NFT;
use App\Models\Collections;
use App\Models\Items;
use App\Models\Slide;
use App\Models\HomeHeading;

class FrontController extends Controller
{
    public function Home(){

        $nft = NFT::all();
        $collections = Collections::all();
        $categories = Categories::all();
        $items = Items::all();
        $slide = Slide::all();
        $home_heading = HomeHeading::all();

        return View("front.index")
        ->with(array(
         'nft'=>$nft,
         'collections'=>$collections,
         'categories'=>$categories,
         'items'=>$items,
         'slide'=>$slide,
         'home_heading'=>$home_heading
    ));
    }


    public function Explore(){

        $top_heading = "DISCOVER SOME TOP ITEMS";
        $nft = NFT::all();
        $collections = Collections::all();
        $categories = Categories::all();
        $items = Items::all();
        $slide = Slide::all();

        return View("front.explore")
        ->with(array(
         'top_heading'=>$top_heading,
         'nft'=>$nft,
         'collections'=>$collections,
         'categories'=>$categories,
         'items'=>$items,
         'slide'=>$slide
    ));
    }

    public function Details(){
        $top_heading = "VIEW ITEM DETAILS";
        $nft = NFT::all();
        $collections = Collections::all();
        $categories = Categories::all();
        $items = Items::all();
        $slide = Slide::all();

        return View("front.details")
        ->with(array(
        'top_heading'=>$top_heading,
         'nft'=>$nft,
         'collections'=>$collections,
         'categories'=>$categories,
         'items'=>$items,
         'slide'=>$slide
    ));
    }

    public function Author(){
        $top_heading = "VIEW DETAILS FOR AUTHOR";
        $nft = NFT::all();
        $collections = Collections::all();
        $categories = Categories::all();
        $items = Items::all();
        $slide = Slide::all();

        return View("front.author")
        ->with(array(
         'top_heading'=>$top_heading,
         'nft'=>$nft,
         'collections'=>$collections,
         'categories'=>$categories,
         'items'=>$items,
         'slide'=>$slide
    ));
    }

    public function Create(){

        $top_heading = "CREATE YOUR NFT NOW.";
        $nft = NFT::all();
        $collections = Collections::all();
        $categories = Categories::all();
        $items = Items::all();
        $slide = Slide::all();

        return View("front.create")
        ->with(array(
         'top_heading'=>$top_heading,
         'nft'=>$nft,
         'collections'=>$collections,
         'categories'=>$categories,
         'items'=>$items,
         'slide'=>$slide
    ));
    }
}
