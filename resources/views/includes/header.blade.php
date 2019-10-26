<!-- Código interno del header no hace falta etiquieta header aqui-->
<div class="navbar">
    <a href="/"><img src="{{asset('assets/images/imagenesLanding/txingudi_color.png')}}"></a>
    <ul class="nav">
        <!--<li class="forma3"><a><span class="trn" data-trn-key="menuHome" href="{{url('/')}}">Inicio</span></a></li>-->
        <li class="forma3"><a><img src="{{asset('assets/images/icons/home.png')}}"></a></li>
        <li class="forma2">
            <div class="dropdown">
                <!--<button class="dropbtn trn" data-trn-key="menuShops"><img src="{{asset('assets/images/icons/cart.png')}}"></button> -->
                <img class="carro" src="{{asset('assets/images/icons/shop.png')}}">
                <div class="dropdown-content">
                    @foreach ($shops as $shop )
                        <a href={{url('/tienda/'.$shop->id)}}>{{$shop->name}}</a>;
                    @endforeach
                </div>
            </div>
        </li>
        <li class="forma3"><a><img src="{{asset('assets/images/icons/contact.png')}}"></a></li>
    </ul>
    <ul class="languages">
        <li data-lang="eu" class="language">Eu</li>
        <li data-lang="es" class="language">Es</li>
        <li data-lang="en" class="language">En</li>
    </ul>
</div>



