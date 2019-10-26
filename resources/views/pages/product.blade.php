@extends('layouts.master')
@section('content')
<section id="productContainer">
    <article id=productImg>
        <img src={{asset("assets/images/fotoProducto/$info->photo")}}>
    </article>

    <aside>
        <h1 class="trn" data-trn-key='{{"productName$info->id"}}'>{{$info->name}}</h1>
        <h2> {{$info->price}}&euro; </h2>
        <p class="trn" data-trn-key='{{"productDescription$info->id"}}'> {{$info->description}} </p>
        <article class="forms">
            <form action="<?php echo '/producto/' . $info->id ?>" method='POST' id="updateForm">
                @method('PUT')
                @csrf
                <input type="number" value={{ $info->stock }} min="1" max="20" step="1" name="stock">
                <input type="image" src="{{asset('assets/images/icons/updateWhite.png')}}">
            </form>
            <form action="<?php echo '/producto/' . $info->id ?>" method="POST" id="deleteForm">
                @method('DELETE')
                @csrf
                <input type="hidden" name="shopId" value={{$info->shopId}}>
                <input type="image" src="{{asset('assets/images/icons/deleteWhite.png')}}">
            </form>
        </article>
    </aside>

</section>
<div id="videoContainer">
    <iframe width="560" height="315" src="{{$info->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</div>

@stop