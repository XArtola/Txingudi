<!-- Código interno del header no hace falta etiquieta header aqui-->
<div class="navbar">
    <a href="#"><img src="{{asset('assets/images/txingudi_color.png')}}"></a>
    <ul class="nav">
        <li class="trn" data-trn-key="menuHome">Inicio</li>
        <li>
            <div class="dropdown">
                <button class="dropbtn trn" data-trn-key="menuShops">Tiendas</button>
                <div class="dropdown-content">
                    @foreach ($shops as $shop )
                        <a href='{{url('/tienda/'.$shop->id)}}'>{{$shop->name}}</a>;
                    @endforeach
                </div>
            </div>
        </li>
        <li class="trn" data-trn-key="menuContact">Contacto</li>
    </ul>
    <ul class="languages">
        <li data-lang="eu" class="language">Eu</li>
        <li data-lang="es" class="language">Es</li>
        <li data-lang="en" class="language">En</li>
    </ul>
</div>