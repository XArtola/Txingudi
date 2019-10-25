<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Shops;

class ProductController extends Controller
{
    /**
     * Muestra el formulario de 
     *
     * @param  int  $shopId
     * @return \Illuminate\Http\Response
     */
    public function form($shopId)
    {
        $shops = Shops::select('id', 'name')->get();
        return view('pages.productForm', ['shopId' => $shopId, 'shops' => $shops]);
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
        $product->stock = $request->stock;
        $product->price = $request->price;
        $photoName = uniqid().$request->file('photo')->getClientOriginalExtension();
        $path = $request->file('photo')->storeAs('fotoProducto', $photoName, 'submitedImages');
        $product->photo = $photoName;
        $product->language = $request->language;
        $product->link = $request->link;
        $product->shopId = $request->shopId;
        $product->save();
        return redirect("tienda/" . $request->shopId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = Products::where('id', $id)->first();
        $shops = Shops::select('id', 'name')->get();
        return view('pages.product', ['info' => $info, 'shops' => $shops]);
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
        Products::where('id', $id)->update(['stock' => $request->stock]);
        return redirect("producto/" . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Products::where('id', $id)->delete();
        $ruta =  "tienda/" . $request->shopId;
        return redirect($ruta);
    }
}
