<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['Image'] = Images::all();
        $viewData['product'] = Product::all();
        return view('admin.image.index')->with("viewData", $viewData);
    }
    public function store(Request $request)
    {
        $image = new Images();
        $image->setProId($request->get('pro_id'));
        $image->setImage1($request->get('image1'));
        $image->setImage2($request->get('image2'));
        $image->setImage3($request->get('image3'));
        $image->save();
        return redirect()->route('admin.image.index');
    }
    public function edit($id)
    {
        $viewData = [];
        $viewData['Image'] = Images::find($id);
        $viewData['product'] = Product::all();
        return view('admin.image.edit')->with("viewData", $viewData);
    }
    public function update(Request $request, $id)
    {
        $image = Images::find($id);
        $image->setProId($request->get('pro_id'));

        $image->setProId($request->input([('pro_id')]));
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $file->move(public_path() . '/images/', $file->getClientOriginalName());
            $image->setImage1($file->getClientOriginalName());
        }
        $image->setProId($request->input([('pro_id')]));
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $file->move(public_path() . '/images/', $file->getClientOriginalName());
            $image->setImage2($file->getClientOriginalName());
        }
        $image->setProId($request->input([('pro_id')]));
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $file->move(public_path() . '/images/', $file->getClientOriginalName());
            $image->setImage3($file->getClientOriginalName());
        }
        $image->save();
        return redirect()->route('admin.image.index');
    }
    public function delete($id)
    {
        $image = Images::find($id);
        $image->delete();
        return redirect()->route('admin.image.index');
    }
}
