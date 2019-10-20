<!-- Código interno del head no hace falta etiquieta head aqui

Link
https://scotch.io/tutorials/simple-laravel-layouts-using-blade
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/CSS/estilos.css') }}" />
    <script type="text/javascript">
        sessionStorage.setItem("language", "en");
    </script>
    <script src="{{asset('assets/lib/jquery-3.4.1.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/jquery.translate.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/dictionary.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/gen_validatorv4.js')}}" type="text/javascript"></script>
</head>