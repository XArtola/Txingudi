@extends('layouts.master')
@section('content')
<?php echo $infoShop->name ?>
<!--Esto redirigira al formulario de inserción de nuevo producto -->

<a href={{url("/producto/create/$infoShop->id")}}><img src="{{asset('assets/images/icons/add.png')}}"></a>;
@stop