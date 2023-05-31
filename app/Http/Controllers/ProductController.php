<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Rules\GlbFileRule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function home_view(Request $request)
    {
        $search = $request['search'] ?? '';
        if ($search != '' ) {
            $product = Product::where('product_name','LIKE',"%$search%")->orWHERE('category','LIKE',"%$search%")->get();
        }
        else {
            $product = Product::all();
        }

        $products = DB::table('products')
                ->orderBy('product_id', 'desc')
                ->take(3)
                ->get();
        $trending_products = DB::table('products')
                ->orderBy('product_id', 'asc')
                ->take(3)
                ->get();
                $data = compact('product','search','products','trending_products');
                return view('frontend.welcome')->with($data);
    }

    public function view(Request $request)
    {
        // $pagination = Product::paginate(10);
        $search = $request['search'] ?? '';
        if ($search != '' ) {
            $product = Product::where('product_name','LIKE',"%$search%")->orWHERE('category','LIKE',"%$search%")->paginate(21);
        }
        else {
            $product = Product::paginate(21);
        }

        $data = compact('product','search');

        return view('shop.shop')->with($data);
    }


}
