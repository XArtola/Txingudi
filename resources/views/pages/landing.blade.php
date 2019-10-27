@extends('layouts.master')
@section('content')


<!-- EVENTOS MÁS CERCANOS -->
<div id="eventos">

    <div id="texto">
        <h2 class="trn" data-trn-key="event2" id="info">¡La noche más terrorífica del año!<br></h2>
        <h3 class="trn" data-trn-key="eventTime" id="info">Ven a celebrar Halloween a Txingudi</h3>
    </div>
</div>

<!-- PROMOCIONES ACTUALES -->
<div id="promociones">
    <h1 class="trn" data-trn-key="bestPromotions">Las mejores <span class='resaltado'>promociones</span></h1>
</div>
<div id="contenedor">
    <div id="productosLanding">
        <div class="productoLanding" id="promo1">
            <div>
                <h3>30% Dto. en bicicletas</h3>
                <p>
                    Necesitas una bicicleta nueva? es tu momento, ven a DECATHLON hoy y encontraras todas las bicicletas al 30% de descuento.
                </p>
            </div>
        </div>
        <div class="productoLanding" id="promo2">
            <div>
                <h3>2X1 en disfrazes de afede</h3>
                <p>
                    Halloween se acerca, En afede encontraras un 2X1 en los disfrazes mas espeluznantes para que te disfraces de lo que quieras.
                </p>
            </div>
        </div>
        <div class="productoLanding" id="promo3">
            <div>
                <h3>Gasolina a 0.80€ el litro</h3>
                <p>
                    Aprovecha para recargar el deposito de tu vehiculo en nuestra gasolinera. no encontraras otra gasolinera con los precios iguales.
                </p>
            </div>
        </div>
        <div class="productoLanding" id="promo4">
            <div>
                <h3>Circo Raluy en Txingudi</h3>
                <p>
                    Si no sabes que hacer esta tarde, estas de suerte. El circo Raluy ha llegado al centro comercial Txingudi.
                </p>
            </div>
        </div>

    </div>
</div>


<!-- FOREACH PARA RECORRER Y MOSTRAR TODAS LAS TIENDAS -->

<h1 id="shopsTitle" class="trn" data-trn-key="visitShops">Visita nuestras <span class='resaltadoy'>tiendas</span></h1>

<div id="tiendas">

    @foreach($shops as $shop )

    <a class="tienda" href={{url("/tienda/$shop->id")}}> <img src={{asset("assets/$shop->logo")}} "> </a>


    @endforeach

</div>


<h1 id="locationTitle" class="trn" data-trn-key="weAreHere">Estamos <span class='resaltadob'>aqui</span></h1>

        <!-- IFRAME DEL MAPA SACADO DE GOOGLE MAPS-->

        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1451.3470922523986!2d-1.8367863129816961!3d43.32066089737894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a7f9305fe675%3A0xdc69099e4c09cecb!2sParque%20Comercial%20Txingudi!5e0!3m2!1ses!2ses!4v1571586752460!5m2!1ses!2ses" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        <!-- CONTENIDO DEL FORMULARIO DE CONTACTO -->
        <h1 class="trn" id="contactFormTitle" data-trn-key="landingFormTitle">Formulario de contacto</h1>
        <div id="formContainer2">
            <form id="newContact" enctype="multipart/form-data">
                <div class="field">
                    <label class="trn" data-trn-key="landingFormName">Nombre y Apellidos</label>
                    <input type="text" name="name2" id="name2">
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" id="email" name="email"><br>
                </div>
                <div class="fielddesc">
                    <label class="trn" data-trn-key="landingFormDescription">Tu pregunta</label>
                    <textarea name="question" id="question"></textarea>
                </div>
                <div class="field submit2">
                    <input type="image" src="{{asset('assets/images/icons/confirmWhite.png')}}">
                </div>
            </form>
        </div>

        <script>
          
            /*Mediante esta variable controlamos si hace falta refrescar la página para actualizar idiomas de validación*/
            hasForm = true;
            /*Inicializar validador*/
            frmvalidator = new Validator("newContact");

            /*Condiciones para el campo nombre y apellidos*/
            frmvalidator.addValidation("name2", "req", eval("dictionary.namelEmpty." + sessionStorage.getItem("language")));
            frmvalidator.addValidation("name2", "maxlen=80", eval("dictionary.namelLength." + sessionStorage.getItem("language")));
            frmvalidator.addValidation("name2", "alphabetic_space", eval("dictionary.namelCharacters." + sessionStorage.getItem("language")));

            /*Condiciones para el campo email*/
            frmvalidator.addValidation("email", "req", eval("dictionary.mailEmpty." + sessionStorage.getItem("language")));

            /*Condiciones para el campo question*/
            frmvalidator.addValidation("question", "req", eval("dictionary.questionEmpty." + sessionStorage.getItem("language")));
            frmvalidator.addValidation("question", "maxlen=230", eval("dictionary.questionLength." + sessionStorage.getItem("language")));
            frmvalidator.addValidation("question", "regexp=^[A-Za-z0-9.,\\sáéíóúÁÉÍÓÚ]{1,230}$", eval("dictionary.questionCharacters." + sessionStorage.getItem("language")));
        </script>
        </body>
        @stop