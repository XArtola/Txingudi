@extends('layouts.master')
@section('content')

<section id="productContainer">

    <h1>{{$info->name}}</h1>

    <img src={{asset("assets/images/fotoProducto/$info->photo")}}>
    <p> {{$info->description}} </p>
</section>
<section class="forms">
    <form action="<?php echo '/producto/' . $info->id ?>" method='POST'>
        @method('PUT')
        @csrf
        <label>Stock</label>
        <input type="number" value={{ $info->stock }} min="1" max="20" step="1" name="stock"><br>
        <input type="image" src="{{asset('assets/images/icons/update.png')}}">
    </form>
    <form action="<?php echo '/producto/' . $info->id ?>" method="POST">
        @method('DELETE')
        @csrf
        <input type="hidden"  name ="shopId" value={{$info->shopId}}>
        <input type="image" src="{{asset('assets/images/icons/delete.png')}}">
    </form>
</section>
<?php echo $info ?>
@stop