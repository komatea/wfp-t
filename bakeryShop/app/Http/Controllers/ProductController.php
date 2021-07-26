<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Metode Query Raw
        //$queryRaw = DB::select('select * from products");

        //Metdoe Query Builder
        $queryBuilder = DB::table('products')
                        ->join('categories','products.category_id','=','categories.id')
                        ->select('products.*',"categories.nama_kategori")//dibikin select karena id terbaca yg paling terakhir untuk menghindari itu
                        ->orderBy('harga_produk','DESC')
                        ->get();

        //cara passing data ke view
        //Cara 1 : sintaks compact-> variable queryBuilder nanri dikenali pada Controller dan View
        // return view('product.index',compact('queryBuilder'));

        //cara 2: sintaks array -> variab;e queryBuilder nanti hanya dikenali pad aCOntroller dan pada view dibah nama menjadi data
        return view('product.index',['data'=>$queryBuilder]);
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //sintaksi untuk mengetahui isi dari variable yang menjadi paramater
        // dd($product);// seperti print_r(); atau var_dump -> exit()
        //dengan menggunakan pramater product di atas, maka akan otomatis akan dibuat query nya 
        //seperti "SELECT * from product where id=x"
        return view('product.show',['data'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
