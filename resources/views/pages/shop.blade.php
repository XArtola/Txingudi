@extends('layouts.master')
@section('content')
<div class="contenido">
    <div class="section">
        <div class="section-left">
            <div class="titulo">
                <?php echo $infoShop->name?>
                <!--Esto redirigira al formulario de inserción de nuevo producto -->
                <a href={{url("/producto/create/$infoShop->id")}}><img src="{{asset('assets/images/icons/add.png')}}"></a>
            </div>
            <p class="trn" data-trn-key='{{"description$infoShop->id"}}'><?php echo $infoShop->description ?></p>
            <div class="reloj">
                <img src="{{asset('assets/images/icons/reloj.png')}}"width="20px" height="20px">
                <?php echo $infoShop->openh ?>-<?php echo $infoShop->closeh ?>
            </div>
        </div>
        <div class="section-right">
            <img src={{asset("assets/$infoShop->photo")}}>
        </div>
    </div>
    <div class="titulo2">Productos:</div>
        <div class="productos">
            @foreach($productos as $producto)
            <div class="producto" data-language={{ $producto->language }}>
                <a href={{url("/producto/$producto->id")}}>
                    <img src={{asset("assets/images/fotoProducto/$producto->photo")}}>
                    <p class="trn" data-trn-key='{{"productName$producto->id"}}'>{{$producto->name}}</p>
                    <p>Stock: {{$producto->stock}}</p>
                    <p style="color:darkgrey; font-weight: bold;">Precio: {{$producto->price}}€</p>  
                </a>
                </div> 
                <?php echo $infoShop->description ?>
            @endforeach 
        </div>

@stop