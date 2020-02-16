<?php

namespace App\Http\Controllers;

use App\Library;
use Illuminate\Http\Request;

class displayLibController extends Controller
{
    public function index(Request $request) 
    {
        $city_name = $_GET['name'];
        $libraries = Library::where('city',$city_name)->get();
        return view('displayLib',['libraries' => $libraries]);
    }
}
