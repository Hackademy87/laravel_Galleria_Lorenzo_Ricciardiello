<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $categories = Category::all();
        $products = Product::all();
        $users = User::all();
        return view('admin.dashboard',compact('products','users','categories'));

    }
}
