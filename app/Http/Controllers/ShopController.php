<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\shop;


class ShopController extends Controller
{
    public function index()
    {
        //1たいた
        $shops = Area::find(1)->shops;

        dd($shops);

    }
}
