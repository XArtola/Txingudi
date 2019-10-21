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

@stop