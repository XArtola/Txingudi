<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shops;
use App\Models\Products;

class ShopController extends Controller
{

    /**
     * Show the form for creating a new resourc
     * @return \Illuminate\Http\Response
     */

    public function listShops()
    {
        $shops = Shops::All();

        return view('pages.landing', (['shops' => $shops]));
    }

    public function contactForm()
    {
        $shops = Shops::All();

        return view('pages.landing', (['shops' => $shops, 'goToForm'=>true]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shops = Shops::select('id', 'name')->get();
        $infoShop = Shops::find($id);
        $info = Products::where('id', $id)->first();
        $productos = Products::where('shopId', $id)->get();
        return view('pages.shop', ['infoShop' => $infoShop, 'info' => $info, 'productos' => $productos, 'shops' => $shops]);
    }

}
