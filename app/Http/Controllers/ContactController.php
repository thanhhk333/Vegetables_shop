<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $viewData = [];
        return view('contact.index')->with("viewData", $viewData);
    }
}
