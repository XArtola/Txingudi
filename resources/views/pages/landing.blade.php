@extends('layouts.master')
@section('content')

<!--
<div id="eventos">
    <img src="{{asset('assets/images/imagenesLanding/evento.png')}}" style="width:300px; height:300px;">

    <div id="texto" style="background-image:'assets/images/imagenesLanding/evento.png';">
        <h2 class="trn" data-trn-key="event" id="info">TORNEO DE AJEDREZ DEL 25 AL 27 DE OCTUBRE <br></h2>
        <h3 class="trn" data-trn-key="place" id="info">CC Txingudi Bº VENTAS Nº 80, 20305, IRUN</h3>
    </div>
</div>
-->

<div id="eventos">

    <div id="texto">
        <h2 class="trn" data-trn-key="event2" id="info">¡La noche más terrorífica del año!<br></h2>
        <h3 class="trn" data-trn-key="eventTime" id="info">Ven a celebrar Halloween a Txingudi</h3>
    </div>
</div>

<div id="promociones">
    <h2 class="trn" data-trn-key="bestPromotions">LAS MEJORES PROMOCIONES</h2>
</div>
<div id="contenedor">
    <div id="productos">
        <div id="producto">
            <img src="{{asset('assets/images/imagenesLanding/bicicleta.jpeg')}}" style="width:300px; height:300px;">
            <h3>30% Dto. en bicicletas</h3><br>
            <p>
                Necesitas una bicicleta nueva? es tu momento, ven a DECATHLON hoy y encontraras todas las bicicletas al 30% de descuento.
            </p>
        </div>
        <div id="producto">
            <img src="{{asset('assets/images/imagenesLanding/disfraz.png')}}" style="width:300px; height:300px;">
            <h3>2X1 en disfrazes de afede</h3><br>
            <p>
                Halloween se acerca, En afede encontraras un 2X1 en los disfrazes mas espeluznantes para que te disfraces de lo que quieras.
            </p>
        </div>
        <div id="producto">
            <img src="{{asset('assets/images/imagenesLanding/gasolina.jpg')}}" style="width:300px; height:300px;">
            <h3>Gasolina a 0.80€ el litro</h3><br>
            <p>
                Aprovecha para recargar el deposito de tu vehiculo en nuestra gasolinera. no encontraras otra gasolinera con los precios iguales.
            </p>
        </div>
        <div id="producto">
            <img src="{{asset('assets/images/imagenesLanding/circo.jpeg')}}" style="width:300px; height:300px;">
            <h3>Circo Raluy en Txingudi</h3><br>
            <p>
                Si no sabes que hacer esta tarde, estas de suerte. El circo Raluy ha llegado al centro comercial Txingudi.
            </p>
        </div>
    </div>
</div>


<!-- FOREACH PARA RECORRER Y MOSTRAR TODAS LAS TIENDAS -->
<div id="tiendas">
    <div id="tienda">
        <div id="imagen">
            @foreach ($shops as $shop )
            <a href={{url("/tienda/$shop->id")}}> <img src={{asset("assets/$shop->logo")}} style="width:400px; height:300px;"> </a>
            @endforeach
        </div>
    </div>
</div>

<!-- INFORMACIÓN DE LOS HORARIOS -->
<div id="horarios">
    <h3 class="trn" data-trn-key="schedule"> HORARIOS:<br>
        Horario del centro: De lunes a sábado de 10h. a 22h.</h3>
</div>

<!-- IFRAME DEL MAPA SACADO DE GOOGLE MAPS-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1451.3470922523986!2d-1.8367863129816961!3d43.32066089737894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a7f9305fe675%3A0xdc69099e4c09cecb!2sParque%20Comercial%20Txingudi!5e0!3m2!1ses!2ses!4v1571586752460!5m2!1ses!2ses" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

<!-- CONTENIDO DEL FORMULARIO DE CONTACTO -->
<div id="formContainer">
    <h1 class="trn" data-trn-key="landingFormTitle">Formulario de contacto</h1>
    <form id="newContact" enctype="multipart/form-data">
        <div class="field">
            <label class="trn" data-trn-key="landingFormName">Nombre y Apellidos</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="field">
            <label>Email</label>
            <input type="email" id="email" name="email"><br>
        </div>
        <div class="fielddesc">
            <label class="trn" data-trn-key="landingFormDescription">Tu pregunta</label>
            <textarea name="question" id="question"></textarea>
        </div>
        <div class="field submit">
            <input type="image" src="{{asset('assets/images/icons/confirmWhite.png')}}">
        </div>
    </form>
</div>

<script>
    hasForm = true;

    frmvalidator = new Validator("newContact");

    frmvalidator.addValidation("name", "req", eval("dictionary.namelEmpty." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("name", "maxlen=80", eval("dictionary.namelLength." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("name", "alphabetic_space", eval("dictionary.namelCharacters." + sessionStorage.getItem("language")));

    frmvalidator.addValidation("email", "req", eval("dictionary.mailEmpty." + sessionStorage.getItem("language")));

    frmvalidator.addValidation("question", "req", eval("dictionary.questionEmpty." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("question", "maxlen=230", eval("dictionary.questionLength." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("question", "regexp=^[A-Za-z0-9., áéíóúÁÉÍÓÚ]{1,230}$", eval("dictionary.questionCharacters." + sessionStorage.getItem("language")));
</script>
</body>
@stop