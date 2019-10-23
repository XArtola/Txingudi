@extends('layouts.master')
@section('content')
<div class="section">
    <div class="section-left">
        <div class="titulo">
            <?php echo $infoShop->name?>
            <!--Esto redirigira al formulario de inserción de nuevo producto -->
            <a href={{url("/producto/create/$infoShop->id")}}><img src="{{asset('assets/images/icons/add.png')}}"></a>
        </div>
        <p><?php echo $infoShop->description ?></p>
        <div class="reloj">
            <img src="{{asset('assets/images/icons/reloj.png')}}"width="20px" height="20px">
            <?php echo $infoShop->openh ?>-<?php echo $infoShop->closeh ?>
        </div>
    </div>
    <div class="section-right">
        <img src={{asset("assets/$infoShop->photo")}}>
    </div>
</div>
    <div class="productos">
        @foreach($productos as $producto)
            <p>{{$producto->name}}</p>
            <p>{{$producto->description}}</p>
            <p>{{$producto->stock}}</p>
            <p>{{$producto->price}}</p>
            <img src={{asset("assets/images/fotoProducto/$producto->photo")}}> 
        @endforeach 
    </div>





    <style>
    .section{
        width:100%;
        height:auto;
       
        display: flex;
	    flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        align-content: stretch;
    }
    .section-left{
        flex:1 1 50%;
        margin: 15px 0 0 30px;
    }
    .section-left p{
        text-align:justify;
        font-size:20px;
        margin: 20px 40px 0 5px;
    }
    .section-left .titulo{
        width:100%;
        font-size:60px;
        border-bottom: 6px solid black;
    }
    .section-left .titulo a{
        float:right;
    }
    .section-left .reloj{
        margin-top:10px;
        float:right;
    }
    .section-right{
        flex:1 1 50%;
    }
    .section-right{
        flex:1 1 50%;
    }
    .section-right img{
        width:80%;
        height:300px;
        margin-left:80px; 
    }
    </style>
 



</div>
@stop