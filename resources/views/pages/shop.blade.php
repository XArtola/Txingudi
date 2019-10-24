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
</div>






    <style>
    .contenido{
        font-family: 'Source Sans Pro', sans-serif;
    }
    .productos{
        margin-top:14px;
        width:100%;
        height:auto;
        display:flex;
        flex-wrap:wrap;
    }
    .titulo2{
        font-size:60px;
        margin-top:20px;
        margin-left:30px;
    }
    .producto{
        flex:1 1 20%;
        text-align:center;
        margin-top:20px;
        margin:100px;
        box-shadow:5px 10px 10px gray;
    }
    .producto p{
        margin-top:5px;
        margin-bottom:6px;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;

    }
    .producto img{
        margin-bottom:10px;
        margin-top:40px;
        width:15vw;
        height:150px;
        box-shadow:5px 10px 10px gray;
    }
    a{
        text-decoration:none;
        color:black;
    }
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