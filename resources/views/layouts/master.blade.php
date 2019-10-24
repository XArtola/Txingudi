@include('includes.head')


<body>
@include('includes.header')
    <div class="container">
        @yield('content')
    </div>

    <footer>

        @include('includes.footer')

    </footer>
</body>

</html>