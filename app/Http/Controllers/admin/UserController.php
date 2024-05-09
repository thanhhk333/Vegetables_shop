<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Quản lý nhân viên';
        $viewData['user'] = User::all();
        return view('admin.user.index')->with('viewData', $viewData);
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->user_id = $request->user_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('success', 'Thêm thành công');
    }
    public function edit($id)
    {
        $viewData = [];

        $viewData['user'] = \App\Models\User::findOrFail($id);
        return view('admin.user.edit')->with('viewData', $viewData);
    }
    public function update(Request $request, $id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->name = $request->name;
        $user->user_id = $request->user_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('success', 'Sửa thành công');
    }
    public function delete($id)
    {
        User::destroy($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
