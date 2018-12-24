<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProducts = DB::select('SELECT A.id,
        A.title,
        A.sku,
        A.material,
        A.qty,
        A.size,
        A.user_id,
        A.created_at,
        B.title as brand,
        concat(C.f_name," ",C.l_name) as user
        FROM products A
        INNER JOIN brands B
        ON A.brand_id = B.id
        INNER JOIN users C
        ON A.user_id = C.id
        ORDER BY created_at ASC');
        return view('admin.products.all', ['allProducts' => $allProducts]);
        // return $allProducts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // input variables
        $title = $request->input('title');
        $image = $request->input('img_url');
        $sku = $request->input('sku');
        $material = $request->input('material');
        $size = $request->input('size');
        $description = $request->input('description');
        $quantity = $request->input('qty');
        $brands = $request->input('brands');

        // mysql query insert
        $product = DB::insert
        ('INSERT INTO products
                  (title,
                   img_url,
                   sku,
                   material,
                   description,
                   brand_id,
                   qty,
                   size,
                   user_id)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)',
                  [$title, $image, $sku, $material, $description, $brands, $quantity, $size, 1]);

        return redirect()->route('product.all');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.products.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.products.edit');
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
}
