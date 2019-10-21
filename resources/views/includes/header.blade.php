<!-- Código interno del header no hace falta etiquieta header aqui-->
<div class="navbar">
<<<<<<< HEAD
    <a href="/"><img src="{{asset('assets/images/txingudi_color.png')}}"></a>
=======

    <a href="#"><img src="{{asset('assets/images/txingudi_color.png')}}"></a>
>>>>>>> 4684de5012b580dce99a49a1f39ce55a1f582984
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
>>>>>>> d853dd6d4f58730e227ddbe033547f17cc608e52
