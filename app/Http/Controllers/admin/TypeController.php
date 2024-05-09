<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['ProductType'] = Type::all();
        return view('admin.type.index')->with('viewData', $viewData);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $type = new \App\Models\Type();
        $type->name = $request->name;
        $type->save();
        return view('admin.type.index')->with('success', 'Thêm thành công');
    }
    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = 'Sửa loại sản phẩm';
        $viewData['ProductType'] = \App\Models\Type::findOrFail($id);
        return view('admin.type.edit')->with('viewData', $viewData);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:types,name,' . $id,
        ]);
        $type = \App\Models\Type::findOrFail($id);
        $type->name = $request->name;
        $type->save();
        return redirect()->back()->with('success', 'Sửa thành công');
    }
    public function delete($id)
    {
        $type = \App\Models\Type::findOrFail($id);
        $type->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
