<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.addproduct');
    }

    public function allProduct(){
        $allProduct = DB::table('tbl_product')->get();
        return view('admin.allproduct')->with('allproduct',$allProduct);
    }
    public function saveProduct(Request $request){
        $data = array();
        $data['product_name'] = $request->productname;
        $data['price'] = $request->productprice;
        $data['product_status'] = $request->productstatus;
        $data['product_desc'] = $request->productdesc;

        DB::table('tbl_product')->insert($data);
        return view('admin.allproduct');
    }
}
