@extends('layouts.master')
@section('content')
    <div id="eventos">
        <img src="{{asset('assets/images/evento.jpg')}}" style="width:300px; height:300px;">

        <div id="texto">
            <h2 id="info">TORNEO DE AJEDREZ DEL 25 AL 27 DE OCTUBRE <br></h2>
            <h3 id="info">CC Txingudi Bº VENTAS Nº 80, 20305, IRUN</h3>
        </div>
    </div>

    <div id="promociones">
            <h2 >LAS MEJORES PROMOCIONES</h2>
    </div>
    <div id="productos">
        <img src="{{asset('assets/images/evento.jpg')}}" style="width:300px; height:300px;">
        <img src="{{asset('assets/images/evento.jpg')}}" style="width:300px; height:300px;">
        <img src="{{asset('assets/images/evento.jpg')}}" style="width:300px; height:300px;">
        <img src="{{asset('assets/images/evento.jpg')}}" style="width:300px; height:300px;">
    </div>

    <div id="horarios">
   <h3> HORARIOS:<br> 
    Horario del centro: De lunes a sábado de 10h. a 22h.</h3>
    </div>


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1451.3470922523986!2d-1.8367863129816961!3d43.32066089737894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a7f9305fe675%3A0xdc69099e4c09cecb!2sParque%20Comercial%20Txingudi!5e0!3m2!1ses!2ses!4v1571586752460!5m2!1ses!2ses" width="1920" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</body>
    <?php echo $shops ?>
@stop