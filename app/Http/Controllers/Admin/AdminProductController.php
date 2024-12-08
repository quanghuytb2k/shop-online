<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductStoreRequest;
use App\Models\Product;
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

    function store(ProductStoreRequest $request){
        if($request->hasFile('file')){
            $file= $request->file;
            $filename= $file->getClientOriginalName();
            $thumbnail = "uploads/products/".$filename;
            $file->move('public/uploads/products/', $file->getClientOriginalName());
        }

        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'old_price' =>$request->input('old_price'),
            'content' => $request->input('content'),
            'creator'=>Auth::user()->name,
            'warehouse' => @$request->input('number'),
            'sold'=>0,
            'cat_id' => $request->input('cat'),
            'image'=>$thumbnail ?? null,
        ]);

        dd(32323);

        return redirect('product/list')->with('status', 'Đã thêm sản phẩm thành công!');
    }
}
