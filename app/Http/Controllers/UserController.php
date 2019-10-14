<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {

        return view('lista', ['lista' => ['uno' => 'zapatos', 'dos' => 'camisa', 'tres' => 'gorro']]);
    }

    public function show2($nombre)
    {

        return view('lista', ['lista' => ['uno' => 'zapatos', 'dos' => 'camisa', 'tres' => 'gorro'],'nombre'=>$nombre]);
    }
}
