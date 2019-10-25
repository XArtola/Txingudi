<!-- Código interno del header no hace falta etiquieta header aqui-->
<div class="navbar">
    <a href="/"><img src="{{asset('assets/images/imagenesLanding/txingudi_color.png')}}"></a>
    <ul class="nav">
        <li class="forma3"><a class="trn" data-trn-key="menuHome" href="{{url('/')}}">Inicio</a></li>
        <li class="forma2">
            <div class="dropdown">
                <button class="dropbtn trn" data-trn-key="menuShops">Tiendas</button>
                <div class="dropdown-content">
                    @foreach ($shops as $shop )
                        <a href={{url('/tienda/'.$shop->id)}}>{{$shop->name}}</a>;
                    @endforeach
                </div>
            </div>
        </li>
        <li class="forma3"><a class="trn" data-trn-key="menuContact" href="{{url('/')}}">Contacto</a></li>
    </ul>
    <ul class="languages">
        <li data-lang="eu" class="language">Eu</li>
        <li data-lang="es" class="language">Es</li>
        <li data-lang="en" class="language">En</li>
    </ul>
</div>


