<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ManuController extends Controller
{
    public function addManu()
    {
        return view('admin.addmanu');
    }

    public function allManu()
    {
        $all_manu = DB::table('tbl_manu')->get();
        return view('admin.allmanu')->with('all_manu', $all_manu);
    }
    public function saveManu(Request $request)
    {
        $data = array();
        $data['manu_name'] = $request->manuname;
        $data['manu_status'] = $request->manustatus;
        $data['manu_desc'] = $request->manudesc;

        DB::table('tbl_manu')->insert($data);
        Session::put('message', 'Thêm thành công');
        return view('admin.addmanu');
    }
    public function showManu($manuid)
    {
        DB::table('tbl_manu')->where('manu_id', $manuid)->update(['manu_status' => 0]);
        Session::put('message', 'Thay đổi phương thức thể hiện của sản hãng thành công');
        return view('admin.dashboard');
    }
    public function hideManu($manuid)
    {
        DB::table('tbl_manu')->where('manu_id', $manuid)->update(['manu_status' => 1]);
        Session::put('message', 'Thay đổi phương thức thể hiện của sản hãng thành công');
        return view('admin.dashboard');
    }
    public function editManu($manuid)
    {
        $edit_manu = DB::table('tbl_manu')->where('manu_id', $manuid)->get();
        return view('admin.editmanu')->with('edit_manu', $edit_manu);
    }
    public function updateManu(Request $request, $manuid)
    {
        $data = array();
        $data['manu_name'] = $request->manuname;
        $data['manu_desc'] = $request->manudesc;
        DB::table('tbl_manu')->where('manu_id',$manuid)->update($data);
        Session::put('message', 'Cập nhật hãng thành công');
        return view('admin.dashboard');
    }
    public function deleteManu($manuid)
    {
        DB::table('tbl_manu')->where('manu_id',$manuid)->delete();
        Session::put('message', 'Xoá hãng thành công');
        return view('admin.dashboard');
    }
}
