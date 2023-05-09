<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.addproduct');
    }

    public function allProduct()
    {
        $all_product = DB::table('tbl_product')->get();
        return view('admin.allproduct')->with('all_product', $all_product);
    }
    public function saveProduct(Request $request)
    {
        $data = array();
        $data['product_name'] = $request->productname;
        $data['product_status'] = $request->productstatus;
        $data['product_desc'] = $request->productdesc;

        DB::table('tbl_product')->insert($data);
        Session::put('message', 'Thêm thành công');
        return view('admin.addproduct');
    }
    public function showProduct($productid)
    {
        DB::table('tbl_product')->where('category_id', $productid)->update(['product_status' => 0]);
        Session::put('message', 'Thay đổi phương thức thể hiện của sản phẩm thành công');
        return view('admin.dashboard');
    }
    public function hideProduct($productid)
    {
        DB::table('tbl_product')->where('category_id', $productid)->update(['product_status' => 1]);
        Session::put('message', 'Thay đổi phương thức thể hiện của sản phẩm thành công');
        return view('admin.dashboard');
    }
    public function editProduct($productid)
    {
        $edit_product = DB::table('tbl_product')->where('category_id', $productid)->get();
        return view('admin.editproduct')->with('edit_product', $edit_product);
    }
    public function updateProduct(Request $request, $productid)
    {
        $data = array();
        $data['product_name'] = $request->productname;
        $data['product_desc'] = $request->productdesc;
        DB::table('tbl_product')->where('category_id',$productid)->update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return view('admin.dashboard');
    }
    public function deleteProduct($productid)
    {
        DB::table('tbl_product')->where('category_id',$productid)->delete();
        Session::put('message', 'Xoá sản phẩm thành công');
        return view('admin.dashboard');
    }
}
