<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Testimonials - Online Store";
        $viewData["subtitle"] = "Testimonials";
        $viewData["description"] = "This is a testimonials page ...";
        $viewData["author"] = "Developed by: Your Name";
        return view('testimonial.index')->with("viewData", $viewData);
    }
}
