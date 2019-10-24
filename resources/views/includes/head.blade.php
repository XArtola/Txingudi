<!-- Código interno del head no hace falta etiquieta head aqui

Link
https://scotch.io/tutorials/simple-laravel-layouts-using-blade
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <style>
    *{
        padding:0;
        margin:0;
    }
        .navbar{
            display: flex;
            height: 100px;
            background-color: #009A8C;
            justify-content: space-between;
            padding-left: 10px;
            padding-right: 10px;
            align-items:center; 
        }
        logo{
            color: white; 
        }

        li{
            display: inline-block;
            color:white;
        }
        img{
            background-color:white;
        }

        footer{
            height: 80px;
            background-color:#034890;
        }

    </style>

</head>