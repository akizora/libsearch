<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class displayLibController extends Controller
{
    public function index() 
    {
        return view('displayLib');
    }
}
