<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $queryBuilder = DB::table('categories')->get();
        // return view('category.index',['data'=>$queryBuilder]);
        return view('category.index',['data'=>Category::all()]);
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function totalproducteachcategory(){
        
        //raw query 
        // SELECT c.id, c.nama_kategori, COUNT(c.id)
        // FROM categories c INNER JOIN products p ON c.id= p.category_id
        // GROUP by c.id, c.nama_kategori  
        $queryRaw = DB::select('SELECT c.id, c.nama_kategori, COUNT(c.id) as jumlah, AVG(p.harga_produk) as rata
                                FROM categories c INNER JOIN products p ON c.id= p.category_id
                                GROUP by c.id, c.nama_kategori  ');
        
        return view('report.totalproducteachcategory',['data'=>$queryRaw]);
    }

    public function showcake($category_name){
        
        //raw query 
        //1. select count(*) as total from products inner join categories on products.id = categories.product_id
        //2. select * from products inner join categories on products.id = categories.product_id where categories.name=‘tart’

       //Method 1: QueryBuilder
        //    $queryBuilder = DB::table('categories')
        //    ->join('products','categories.id','=','products.category_id')
        //    ->where('categories.nama_kategori',$category_name)
        //    ->get();
        //    $result= $data;
        //    $getTotalData = DB::table('products')->count();
        
       //Method 2: Eloquent Model with Relationship 
        $eloquentModel = Category::where('nama_kategori',$category_name)->first();
        $result = $eloquentModel->products;
        
        //opsi 1 unyuk count product tiap kategori
        // $getTotalData = Product::count()
        //opsi 2:
        $getTotalData = Category::where('jumlah',$category_name)->first();
        
        return view('report.showcake',compact('category_name','result','getTotalData'));
    }    
}
