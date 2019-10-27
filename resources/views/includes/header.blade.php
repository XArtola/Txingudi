<!-- Código interno del header no hace falta etiquieta header aqui-->
<div class="navbar">
    <a class="txingudiIcon" href="{{url('/')}}"><img src="{{asset('assets/images/imagenesLanding/txingudi_color.png')}}"></a>
    <img class="menuIcon" src="{{asset('assets/images/icons/menu.png')}}">
    <a href="{{url('/')}}" class="green"><img src="{{asset('assets/images/icons/home.png')}}"><span class="trn responsiveText" data-trn-key="menuHome">Inicio</span></a>
    <div class="yellow"><img src="{{asset('assets/images/icons/shop.png')}}"><span class="trn responsiveText" data-trn-key="menuShops">Tiendas</span>
        <ul class="shopsMenu">
            @foreach ($shops as $shop )
            <li><a href={{url('/tienda/'.$shop->id)}}>{{$shop->name}}</a></li>
            @endforeach
        </ul>

    </div>
    <a href="{{url('#contactFormTitle')}}" class="green"><img src="{{asset('assets/images/icons/contact.png')}}"><span class="trn responsiveText" data-trn-key="menuContact">Contacto</span></a>
    <ul class="languages">
        <li data-lang="eu" class="language">Eu</li>
        <li data-lang="es" class="language">Es</li>
        <li data-lang="en" class="language">En</li>
    </ul>

</div>
<script>
    $(".menuIcon").click(function() {
        $(".yellow").slideToggle();
        $(".green").slideToggle();
        $(".languages").slideToggle();
    });
</script>