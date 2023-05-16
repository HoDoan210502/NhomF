<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{   

    //Admin Login
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }
        else{
            return Redirect::to('admin')->send(); 
        }
    }


    //Add Product
    public function addProduct()
    {
        $this->AuthLogin();
        return view('admin.addproduct');
    }

    //All Category
    public function allProduct()
    {
        $this->AuthLogin();
        $all_product = DB::table('tbl_product')->paginate(3);
        return view('admin.allproduct')->with('all_product', $all_product);
    }

    //Save Category
    public function saveProduct(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->productname;
        $data['category_status'] = $request->productstatus;
        $data['category_desc'] = $request->productdesc;

        DB::table('tbl_product')->insert($data);
        Session::put('message', 'Thêm thành công');
        return view('admin.addproduct');
    }

    //Show Category
    public function showProduct($productid)
    {
        $this->AuthLogin();
        DB::table('tbl_product')->where('category_id', $productid)->update(['category_status' => 0]);
        Session::put('message', 'Thay đổi phương thức thể hiện của sản phẩm thành công');
        return view('admin.dashboard');
    }

    //Hide Category
    public function hideProduct($productid)
    {
        $this->AuthLogin();
        DB::table('tbl_product')->where('category_id', $productid)->update(['category_status' => 1]);
        Session::put('message', 'Thay đổi phương thức thể hiện của sản phẩm thành công');
        return view('admin.dashboard');
    }

    //Edit Category
    public function editProduct($productid)
    {
        $this->AuthLogin();
        $edit_product = DB::table('tbl_product')->where('category_id', $productid)->get();
        return view('admin.editproduct')->with('edit_product', $edit_product);
    }

    //Update Category
    public function updateProduct(Request $request, $productid)
    {
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->productname;
        $data['category_desc'] = $request->productdesc;
        DB::table('tbl_product')->where('category_id',$productid)->update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return view('admin.dashboard');
    }

    //Delete Category
    public function deleteProduct($productid)
    {
        $this->AuthLogin();
        DB::table('tbl_product')->where('category_id',$productid)->delete();
        Session::put('message', 'Xoá sản phẩm thành công');
        return view('admin.dashboard');
    }


    //Lay danh muc san pham
    public function showInHome($productid){
        $cate_product = DB::table('tbl_product')->where('category_status','0')->orderBy('category_id', 'desc')->get();
        $manu_product = DB::table('tbl_manu')->where('manu_status','0')->orderBy('manu_id', 'desc')->get();
        return view('category.showcategory')->with('category',$cate_product)->with('manu',$manu_product);
    }
}
