<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminlogin');
    }
    public function showdashboard()
    {
        return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();

        if ($result) {
            // Đăng nhập thành công, xuất ra màn hình
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->id);
            return $this->showdashboard();
        } else {
            Session::put('message', 'Email hoặc mật khẩu sai');
            // Đăng nhập không thành công, chuyển hướng về trang admin
            return redirect('/admin');
        }
    }

    public function logout()
    {
        return redirect('/admin');
    }
}
