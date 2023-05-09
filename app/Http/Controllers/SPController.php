<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SPController extends Controller
{
    public function addSP()
    {
        $cate = DB::table('tbl_product')->orderBy('category_id','desc')->get();
        $manu = DB::table('tbl_manu')->orderBy('manu_id','desc')->get();
        return view('admin.addsp')->with('cate',$cate)->with('manu',$manu);
    }

    public function allSP()
    {
        $all_product = DB::table('tbl_product')->get();
        return view('admin.allsp')->with('all_product', $all_product);
    }
    public function saveSP(Request $request)
    {
        $data = array();
        
        $data['category_id'] = $request->cate;
        $data['manu_id'] = $request->manu;
        $data['sp_name'] = $request->spname;
        $data['sp_price'] = $request->spprice;
        $data['sp_status'] = $request->spstatus;
        $data['sp_desc'] = $request->spdesc;
        $get_image = $request->file('spimage');
        if($get_image){
            $new_image = $get_image->getClientOriginalName();
            $get_image->move('public/uploads/product',$new_image);
            $data['sp_image'] = $new_image;
            DB::table('tbl_sp')->insert($data);
            Session::put('message', 'Thêm hình ảnh thành công');
            return view('admin.addproduct');
        }

        DB::table('tbl_sp')->insert($data);
        Session::put('message', 'Thêm sản phẩm thành công');
        return view('admin.addproduct');
    }
    public function showSP($productid)
    {
        DB::table('tbl_product')->where('id', $productid)->update(['product_status' => 0]);
        Session::put('message', 'Thay đổi phương thức thể hiện của sản phẩm thành công');
        return view('admin.dashboard');
    }
    public function hideSP($productid)
    {
        DB::table('tbl_product')->where('id', $productid)->update(['product_status' => 1]);
        Session::put('message', 'Thay đổi phương thức thể hiện của sản phẩm thành công');
        return view('admin.dashboard');
    }
    public function editSP($productid)
    {
        $edit_product = DB::table('tbl_product')->where('id', $productid)->get();
        return view('admin.editproduct')->with('edit_product', $edit_product);
    }
    public function updateSP(Request $request, $productid)
    {
        $data = array();
        $data['product_name'] = $request->productname;
        $data['product_desc'] = $request->productdesc;
        DB::table('tbl_product')->where('id', $productid)->update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return view('admin.dashboard');
    }
    public function deleteSP($productid)
    {
        DB::table('tbl_product')->where('id', $productid)->delete();
        Session::put('message', 'Xoá sản phẩm thành công');
    }
}
