<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $viewData['invoice'] = Invoice::all();
        return view('admin.invoice.index')->with("viewData", $viewData);
    }
    public function store(Request $request)
    {
        $invoice = new Invoice();
        $invoice->invoice_id = $request->invoice_id;
        $invoice->customer_id = $request->customer_id;
        $invoice->staff_id = $request->staff_id;
        $invoice->invoice_type = $request->invoice_type;
        $invoice->status = $request->status;
        $invoice->created = $request->created;
        $invoice->total = $request->total;
        $invoice->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $viewData['invoice'] = Invoice::find($id);
        return view('admin.invoice.edit')->with("viewData", $viewData);
    }
    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);
        $invoice->invoice_id = $request->invoice_id;
        $invoice->customer_id = $request->customer_id;
        $invoice->staff_id = $request->staff_id;
        $invoice->invoice_type = $request->invoice_type;
        $invoice->status = $request->status;
        $invoice->created = $request->created;
        $invoice->total = $request->total;
        $invoice->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        return redirect()->back();
    }
}
