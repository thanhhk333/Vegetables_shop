<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {

        $viewData['customer'] = Customer::all();

        return view('admin.customer.index')->with("viewData", $viewData);
    }
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->customer_id = $request->customer_id;
        $customer->type = $request->type;

        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $viewData['customer'] = Customer::find($id);
        return view('admin.customer.edit')->with("viewData", $viewData);
    }
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->customer_id = $request->customer_id;
        $customer->type = $request->type;

        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->back();
    }
}
