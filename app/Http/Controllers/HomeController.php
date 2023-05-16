<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_product')->where('category_status','0')->orderBy('category_id', 'desc')->get();
        $manu_product = DB::table('tbl_manu')->where('manu_status','0')->orderBy('manu_id', 'desc')->get();

        $all_product = DB::table('tbl_sanpham')->where('product_status','0')->orderBy('product_id', 'desc')->limit(6)->paginate(6);
        
        return view('.welcome')->with('category',$cate_product)->with('manu',$manu_product)->with('all_product',$all_product);
    }
}
