<!-- Código interno del head no hace falta etiquieta head aqui

Link
https://scotch.io/tutorials/simple-laravel-layouts-using-blade
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/CSS/estilos.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Raleway&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Nunito&display=swap');
    </style>
    <script src="{{asset('assets/lib/jquery-3.4.1.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/jquery.translate.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            /*Si la variables de sesión que controla el idioma no esxiste crearlo*/
            console.log("valor: " + sessionStorage.getItem("language"));

            if (sessionStorage.getItem("language") === null)
                sessionStorage.setItem("language", "es");
            /*Inicializar la variable encargada de la traducción*/
            else if (sessionStorage.getItem("language") != "es")
                var translator = $('body').translate({
                    lang: sessionStorage.getItem("language"),
                    t: dictionary
                });
            /*Cuando un boton se clica cambiar el idioma y guardar la selección 
            para en una variable se sesión para mantenerla en las otras páginas*/
            $(".language").click(function() {
                $lang = $(this).data('lang');
                sessionStorage.setItem("language", $lang);
                if(translator)
                translator.lang($lang);
                else
                var translator = $('body').translate({
                    lang: sessionStorage.getItem("language"),
                    t: dictionary
                });
            });
        });
    </script>
    <script src="{{asset('assets/lib/dictionary.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/gen_validatorv4.js')}}" type="text/javascript"></script>
</head>