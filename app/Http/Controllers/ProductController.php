<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function edu_games(){
        return view('product.edu-games');
    }
}
