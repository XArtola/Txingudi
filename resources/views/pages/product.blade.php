@extends('layouts.master')
@section('content')

<section id="productContainer">

    <h1><?php echo $info->name ?></h1>

    <img src="<?php echo $info->photo ?>">
    <p><?php echo $info->description ?></p>

</section>


<h1>Formulario update</h1>
<form action="<?php echo '/producto/' . $info->id ?>" method='POST'>
    @method('PUT')
    @csrf
    <label>stock</label>
    <input type="number" value="<?php echo $info->stock ?>" min="1" max="20" step="1" name="stock"><br>
    <?php //<input type="submit"> 
    ?>
    <input type="image" src="{{asset('assets/images/icons/add.jpg')}}">
</form>
<h1>Formulario delete</h1>
<form action="<?php echo '/producto/' . $info->id ?>" method="POST">
    @method('DELETE')
    @csrf
    <label>Eliminar</label>
    <input type="number" min="1" max="20" step="1" name="stock"><br>
    <?php //<input type="submit" name="Eliminar producto"> 
    ?>
    <input type="image" src="{{asset('assets/images/icons/delete.jpg')}}">
</form>

<?php echo $info ?>
@stop