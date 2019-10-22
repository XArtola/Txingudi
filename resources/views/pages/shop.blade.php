@extends('layouts.master')
@section('content')
<div class="section">
    <div class="section-left">
        <div class="titulo">
            <img src={{asset("assets/$infoShop->logo")}}>
            <?php echo $infoShop->name?>
            <!--Esto redirigira al formulario de inserción de nuevo producto -->
            <a href={{url("/producto/create/$infoShop->id")}}><img src="{{asset('assets/images/icons/add.png')}}"></a>
        </div>
        <?php echo $infoShop->description ?>
        <img width src="{{asset('assets/images/icons/reloj.png')}}"></a> <?php echo $infoShop->openh ?>-<?php echo $infoShop->closeh ?>
    </div>
    <div class="section-right">
    <img src={{asset("assets/$infoShop->photo")}}>
    </div>


<h1><?php echo $infoShop->name?></h1>
<br>
<?php echo $infoShop->description ?>
<br>
<?php echo $infoShop->logo ?>
<br>
<?php echo $infoShop->photo ?>
<br>
<?php echo $infoShop->openh ?>-<?php echo $infoShop->closeh ?>
<img src={{asset("assets/$infoShop->photo")}}>

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
        margin: 20px;
    }
    .titulo{
        width:50%;
        font-size:40px;
        border-bottom: 1px solid black;
    }
    .titulo a{
        float:right;
    }
    .section-right{
        flex:1 1 50%;
    }
    </style>
 



<a id="add" href={{url("/producto/create/$infoShop->id")}}><img src="{{asset('assets/images/icons/add.png')}}"></a>;



</div>
@stop