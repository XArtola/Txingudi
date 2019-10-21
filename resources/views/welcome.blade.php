<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>

    <a href="lista">Lista</a>
    <h1>Mostrar producto</h1>
    <a href="/producto/1">Producto</a>
    <h1>Formulario de insert</h1>
    <form action="/producto" method="POST">
    @csrf
        <label>Producto</label>
        <input type="text" min="1" max="5" step="1" name="name"><br>
        <label>stock</label>
        <input type="number" min="1" max="20" step="1" name="stock"><br>
        <label>Id tienda</label>
        <input type="number" min="1" max="5" step="1" name="shopId"><br>
        <input type="submit">
    </form>

    <h1>Formulario update</h1>
    <form action="/producto/2" method='POST'>
        @method('PUT')
        @csrf
        <label>stock</label>
        <input type="number" min="1" max="20" step="1" name="stock"><br>
        <input type="submit">
    </form>
    <h1>Formulario delete</h1>
    <form action="/producto/3" method="POST">
        @method('DELETE')
        @csrf
        <label>stock</label>
        <input type="number" min="1" max="20" step="1" name="stock"><br>
        <input type="submit">
    </form>



    <?php //echo Form::token()
    ?>
>>>>>>> 9d2e5fdbf84075d0bbe3f09eaf5956ae47026492
</body>

</html>