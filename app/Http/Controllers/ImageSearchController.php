<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageSearchController extends Controller
{
    public function index()
    {
        return view('image_search.index');
    }
}
