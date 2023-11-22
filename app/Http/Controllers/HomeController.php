<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Internets;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Internets::all();
        return view('frontpage.landingPage',compact('products'));
    }

    public function creat(){
        return view (
        'backpage.creat', [
            'categories' => Categories::all(),
        ]);

    }
}
