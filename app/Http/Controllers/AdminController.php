<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $adminEmail = $request->input('admin_email');
        $adminPassword = $request->input('admin_password');

        // Kiểm tra thông tin đăng nhập trong database
        $admin = DB::table('tbl_admin')
            ->where('admin_email', $adminEmail)
            ->where('admin_password', $adminPassword)
            ->first();

        if ($admin) {
            // Thông tin đăng nhập chính xác, chuyển hướng đến trang dashboard
            return redirect('admin.dashboard');
        } else {
            // Thông tin đăng nhập không chính xác, thực hiện xử lý phù hợp (ví dụ: hiển thị thông báo lỗi)
        }
    }

}
