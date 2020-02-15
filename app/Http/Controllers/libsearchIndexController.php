<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class libsearchIndexController extends Controller
{
    public function index () 
    {
        // $prefs = Prefecture::all();
        // return view('index',['prefs' => $prefs]);

        // 東京都の人気のある市区町村を表示
        $cities = City::where('pref_id', '13')->where('popularflg', '1')->get();
        return view('index',['cities' => $cities]);
    }
}
