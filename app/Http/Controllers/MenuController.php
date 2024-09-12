<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Food;

class MenuController extends Controller
{
    public function index(){
        $categories =  Category::with("foods")->get();
       return view("client.menu" , compact("categories"));
    }

}
