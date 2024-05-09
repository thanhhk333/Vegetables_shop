<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Quản lý nhân viên';
        $viewData['staff'] = Staff::all();


        return view('admin.staff.index')->with('viewData', $viewData);
    }
    public function store(Request $request)
    {
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->staff_id = $request->staff_id;
        $staff->phone = $request->phone;
        $staff->position = $request->position;
        $staff->start_in = $request->start_in;
        $staff->save();
        return redirect()->back()->with('success', 'Thêm thành công');
    }
    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = 'Sửa nhân viên';
        $viewData['staff'] = \App\Models\Staff::findOrFail($id);
        return view('admin.staff.edit')->with('viewData', $viewData);
    }
    public function update(Request $request, $id)
    {
        $staff = \App\Models\Staff::findOrFail($id);
        $staff->name = $request->name;
        $staff->staff_id = $request->staff_id;
        $staff->phone = $request->phone;
        $staff->position = $request->position;
        $staff->start_in = $request->start_in;
        $staff->save();
        return redirect()->back()->with('success', 'Sửa thành công');
    }
    public function delete($id)
    {
        Staff::destroy($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
