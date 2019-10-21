@extends('layouts.master')
@section('content')
<<<<<<< HEAD
<h1><?php echo $infoShop->name?></h1>
<br>
<?php echo $infoShop->description ?>
<br>
<?php echo $infoShop->logo ?>
<br>
<?php echo $infoShop->photo ?>
<br>
<?php echo $infoShop->openh ?>-<?php echo $infoShop->closeh ?>

=======
<?php echo $infoShop->name ?>
<!--Esto redirigira al formulario de inserción de nuevo producto -->

<a href={{url("/producto/create/$infoShop->id")}}><img src="{{asset('assets/images/icons/add.png')}}"></a>;
>>>>>>> 8d8c9efa329fe47a97d55ce313d5242b2b38216f
@stop