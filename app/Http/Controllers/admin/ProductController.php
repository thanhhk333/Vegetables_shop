<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // if ($id == null) {
        //     $data = \App\Models\Product::all();
        //     $data = $data->map(function ($item) {
        //         $item->hinh_anh = url('/images/' . $item->hinh_anh);
        //         return $item;
        //     });
        //     return $data;
        // } else {
        //     $product = \App\Models\Product::findOrFail($id);
        //     if ($product) {
        //         $product->hinh_anh = url('/images/' . $product->hinh_anh);
        //         return $product;
        //     } else {
        //         return response()->json(['message' => 'Không tìm thấy sản phẩm'], 404);
        //     }
        // }
        $viewData = [];
        $viewData['title'] = 'Quản lý sản phẩm';
        $viewData['product'] = Product::all();
        $viewData['productType'] = Type::all();
        return view('admin.product.index')->with('viewData', $viewData);
    }
    // public function store(Request $request)
    // {
    //     try {
    //         $request->validate([]);
    //         $product = new Product();
    //         $product->pro_id = $request->pro_id;
    //         $product->pro_name = $request->pro_name;
    //         $product->quantity = $request->quantity;
    //         $product->date = $request->date;
    //         $product->supplier = $request->supplier;
    //         $product->image = $request->image;
    //         $product->unit = $request->unit;
    //         $product->price = $request->price;
    //         $product->description = $request->description;

    //         if ($request->hasFile('imageFile')) {
    //             $image = $request->file('imageFile');
    //             $fileName1 = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
    //             $imgExtension1 = strtolower($image->extension());
    //             $imgName1 = $fileName1 . '_' . time() . '.' . $imgExtension1;
    //             $image->move(public_path('images'), $imgName1);
    //             $product->image = $imgName1;
    //         }

    //         $product->isBestSeller = $request->isBestSeller;
    //         $product->pro_type_id = $request->pro_type_id;

    //         $product->save();
    //         return redirect()->route('admin.product.index')->with('success', 'Thêm thành công');
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'message' => 'Error creating product',
    //             'error' => $e->getMessage()
    //         ], 500);
    //     }
    // }
    // public function edit($id)
    // {
    //     $viewData = [];
    //     $viewData['title'] = 'Sửa sản phẩm';
    //     $viewData['product'] = Product::findOrFail($id);
    //     $viewData['productType'] = Type::all();
    //     return view('admin.product.edit')->with('viewData', $viewData);
    // }

    // public function update(Request $request, $id)
    // {
    //     try {
    //         $product = Product::findOrFail($id);
    //         if ($product) {
    //             $product->pro_id = $request->pro_id;
    //             $product->pro_name = $request->pro_name;
    //             $product->quantity = $request->quantity;
    //             $product->date = $request->date;
    //             $product->supplier = $request->supplier;
    //             $product->image = $request->image;
    //             $product->unit = $request->unit;
    //             $product->price = $request->price;
    //             $product->description = $request->description;

    //             if ($request->hasFile('imageFile')) {
    //                 $image = $request->file('imageFile');
    //                 $fileName1 = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
    //                 $imgExtension1 = strtolower($image->extension());
    //                 $imgName1 = $fileName1 . '_' . time() . '.' . $imgExtension1;
    //                 $image->move(public_path('images'), $imgName1);
    //                 $product->image = $imgName1;
    //             }

    //             $product->isBestSeller = $request->isBestSeller;
    //             $product->pro_type_id = $request->pro_type_id;
    //             $product->save();
    //             return $product;
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'message' => 'Không tìm thấy sản phẩm',
    //             'error' => $e->getMessage()
    //         ], 404);
    //     }

    //     $product->save();
    //     return redirect()->route('admin.product.index')->with('success', 'Sửa thành công');
    // }
    // public function delete($id)
    // {
    //     $product = Product::findOrFail($id);
    //     $product->delete();
    //     return redirect()->back()->with('success', 'Xóa thành công');
    // }
    public function store(Request $request)
    {
        $product = new Product();
        $product->pro_id = $request->pro_id;
        $product->pro_name = $request->pro_name;
        $product->quantity = $request->quantity;
        $product->date = $request->date;
        $product->supplier = $request->supplier;
        $product->image = $request->image;
        $product->unit = $request->unit;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->isBestSeller = $request->isBestSeller;
        $product->pro_type_id = $request->pro_type_id;
        $product->save();
        return redirect()->route('admin.product.index')->with('success', 'Thêm thành công');
    }
    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = 'Sửa sản phẩm';
        $viewData['product'] = Product::findOrFail($id);
        $viewData['productType'] = Type::all();
        return view('admin.product.edit')->with('viewData', $viewData);
    }
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        if ($product) {
            $product->pro_id = $request->pro_id;
            $product->pro_name = $request->pro_name;
            $product->quantity = $request->quantity;
            $product->date = $request->date;
            $product->supplier = $request->supplier;
            $product->image = $request->image;
            $product->unit = $request->unit;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->isBestSeller = $request->isBestSeller;
            $product->pro_type_id = $request->pro_type_id;
            $product->save();
            return $product;
        }
    }
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
