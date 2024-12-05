<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product_cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProductController extends Controller
{
    function add(){
        $cats= Product_cat::all();
        $cats = data_tree($cats);

        return view('admin.product.add', compact('cats'));
    }
}
