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

    </style>


    <div class="navbar">
        <a href="#"><img src="{{asset('assets/images/txingudi_color.png')}}"></a>
        <ul class="nav">
            <li>Home</li>
            <li>About</li>
            <li>Projects</li>
            <li>Contact</li>
        </ul>
    </div>

</head>