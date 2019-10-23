@extends('layouts.master')
@section('content')

<section id="productContainer">
    <article>
        <img src={{asset("assets/images/fotoProducto/$info->photo")}}>
    </article>

    <aside>
        <h1 class="trn" data-trn-key='{{"productName$info->id"}}'>{{$info->name}}</h1>
        <hr>
        <p class="trn" data-trn-key='{{"productDescription$info->id"}}'> {{$info->description}} </p>
        <h2> {{$info->price}}&euro; </h2>
        <article class="forms">
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
                <input type="hidden" name="shopId" value={{$info->shopId}}>
                <input type="image" src="{{asset('assets/images/icons/delete.png')}}">
            </form>
        </article>
    </aside>
    <div id="videoContainer">
        <iframe  src={{$info->link}} frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>

<?php echo $info ?>
@stop