@extends('layouts.master')
@section('content')
<div class="contenido">
    <div class="section">
        <div class="section-left">
            <div class="titulo">
                <?php echo $infoShop->name ?>
                <!--Esto redirigira al formulario de inserción de nuevo producto -->
                <a href={{url("/producto/create/$infoShop->id")}}><img src="{{asset('assets/images/icons/add.png')}}"></a>
            </div>
            <p class="trn" data-trn-key='{{"description$infoShop->id"}}'><?php echo $infoShop->description ?></p>
            <div class="reloj">
                <img src="{{asset('assets/images/icons/reloj.png')}}">
                <span>{{$infoShop->openh }} - {{ $infoShop->closeh }}</span>
            </div>
        </div>
        <div class="section-right">
            <img src={{asset("assets/$infoShop->photo")}}>
        </div>
    </div>
    <div class="productos">
        @foreach($productos as $producto)
        <div class="producto" data-language={{ $producto->language }}>
            <a href={{url("/producto/$producto->id")}}>
                <img src={{asset("assets/images/fotoProducto/$producto->photo")}}>
                <p class="trn productName" data-trn-key='{{"productName$producto->id"}}'>{{$producto->name}}</p>
                <!-- <p>Stock: {{$producto->stock}}</p> -->
                <p>
                    <div id="precio" class="trn" data-trn-key="precio">Precio:</div> {{$producto->price}} €
                </p>
            </a>
        </div>
        @endforeach
        <script>
            isShop = true;
            hasForm = false;
        </script>
    </div>

    @stop