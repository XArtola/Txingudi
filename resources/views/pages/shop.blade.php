@extends('layouts.master')
@section('content')

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

<?php echo $infoShop->name ?>
<!--Esto redirigira al formulario de inserción de nuevo producto -->

<a id="add" href={{url("/producto/create/$infoShop->id")}}><img src="{{asset('assets/images/icons/add.png')}}"></a>;

@stop