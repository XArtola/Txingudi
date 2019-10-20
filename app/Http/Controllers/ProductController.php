<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
//use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $product = new Products;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->stock = $request->input('stock');
        $product->price = $request->price;
        $product->photo = $request->photo;
        $product->link = $request->link;
        $product->shopId = $request->shopId;
        $product->save();
        return view('tienda/'.$request->shopId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $info = Products::where('id', $id)->get();
        return view('producto', ['infoProducto' => $info]);
        /* ESTA ES OTRA FORMA DE GESTIONAR LA BASE DE DATOS
         $info = DB::table('products')->where('id', '=','1')->first();
         s*/
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
        Products::where('id', $id)
            ->update(['stock' => $request->stock]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::where('id', $id)
            ->delete();
    }
}
