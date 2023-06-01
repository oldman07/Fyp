<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Support\Arr;

class ImageSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('image_search.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
//     public function getFlaskData()
// {
//     $client = new Client();
//     $response = $client->get('https://your-flask-app-url.com/api/data');
//     $data = json_decode($response->getBody(), true);

//     return view('your-view', ['data' => $data]);
// }

public function findSimilar(Request $request)
{
    $response = Http::attach(
        'image', file_get_contents($request->file('image')->getRealPath()),
        $request->file('image')->getClientOriginalName()
    )->post('http://localhost:5000/api/find_similar');

    $nearest_neighbors_ids = $response->json();

    // Filter the array based on the 'name' value
    $filtered_names = array_filter($nearest_neighbors_ids, function ($item) {
        return isset($item['name']);
    });

    // Map the 'name' values to a new array without the 'uploads/' prefix
    $product_image_names = array_map(function ($item) {
        return $item['name'];
    }, $filtered_names);

    // Query the database based on the filtered names without the 'uploads/' prefix
    $nearest_neighbors = Product::whereIn('product_image', $product_image_names)->get();

    // Return the view with the relevant information
    return view('image_search.visual-search-results', compact('nearest_neighbors'));
}


// public function findSimilar(Request $request)
// {
//     $response = Http::attach(
//         'image', file_get_contents($request->file('image')->getRealPath()),
//         $request->file('image')->getClientOriginalName()
//     )->post('http://localhost:5000/api/find_similar');

//     $nearest_neighbors_ids = $response->json();

//     // Filter the array based on the 'name' value
//     $filtered_names = array_filter($nearest_neighbors_ids, function ($item) {
//         return isset($item['name']);
//     });

//     // Map the 'name' values to a new array and add 'uploads/' prefix
//     $product_image_names = array_map(function ($item) {
//         return 'uploads/' . $item['name'];
//     }, $filtered_names);

//     // Query the database based on the filtered names with 'uploads/' prefix
//     $nearest_neighbors = Product::whereIn('product_image', $product_image_names)->get();

//     // Return the view with the relevant information
//     return view('image_search.visual-search-results', compact('nearest_neighbors'));
// }

}
