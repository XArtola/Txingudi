@extends('layouts.master')
@section('content')
<div id="eventos">
    <img src="{{asset('assets/images/imagenesLanding/evento.png')}}" style="width:300px; height:300px;">

    <div id="texto">
        <h2 class="trn" data-trn-key="event" id="info">TORNEO DE AJEDREZ DEL 25 AL 27 DE OCTUBRE <br></h2>
        <h3 class="trn" data-trn-key="place" id="info">CC Txingudi Bº VENTAS Nº 80, 20305, IRUN</h3>
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
            <img src="{{asset('assets/images/imagenesLanding/gasolina.jpg')}}" style="width:300px; height:300px;">
            
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis gravida erat ante, ultricies fermentum orci convallis nec.
                Duis velit lacus, tristique ac tortor a, semper suscipit dui.
                Vivamus a porttitor quam. Praesent scelerisque interdum tincidunt.
            </p>
        </div>
    </div>
</div>

<div id="tiendas">
    @foreach ($shops as $shop )
        <a href={{url('/tienda/'.$shop->id)}}><img src={{asset("assets/$shop->logo")}} style="width:300px; height:300px;"></a>
    @endforeach
</div>


<div id="horarios">
    <h3 class="trn" data-trn-key="schedule"> HORARIOS:<br>
        Horario del centro: De lunes a sábado de 10h. a 22h.</h3>
</div>


<div id="formContainer">
    <h1 class="trn" data-trn-key="landingFormTitle">Tienes alguna pregunta. Contactanos</h1>
    <form id="contact" enctype =  "multipart/form-data" action="/producto" method="POST">
        @csrf
        <div class="field">
            <label class="trn" data-trn-key="landingFormName">Nombre y Apellidos</label>
            <input type="text" name="landingName" id="landingName">
        </div>
        <div class="field">
            <label class="trn" data-trn-key="landingFormContenido">Cuentanos tu duda</label>
            <textarea name="landingDescription" id="landingDescription"></textarea>
        </div>
        <div class="field">
        <label class="trn" data-trn-key="productFormVideo">Video</label>
            <input type="url" id="link" name="link">
        </div>
    </form>
</div>
<script type="text/javascript">
    //var lan = "es";
    var frmvalidator = new Validator("newProduct");
    frmvalidator.addValidation("name", "req", eval("dictionary.nameEmpty." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("name", "maxlen=80", eval("dictionary.nameLength." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("name", "alphanumeric_space", eval("dictionary.nameCharacters." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("description", "req", eval("dictionary.descriptionEmpty." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("description", "maxlen=230", eval("dictionary.descriptionEmpty." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("description", "regexp=^[A-Za-z0-9., ]{1,230}$", eval("dictionary.descriptionEmpty." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("stock", "req", eval("dictionary.stockEmpty." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("price", "req", eval("dictionary.priceEmpty." + sessionStorage.getItem("language")));
    frmvalidator.addValidation("photo", "req", eval("dictionary.fileEmpty." + sessionStorage.getItem("language")));
</script>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1451.3470922523986!2d-1.8367863129816961!3d43.32066089737894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a7f9305fe675%3A0xdc69099e4c09cecb!2sParque%20Comercial%20Txingudi!5e0!3m2!1ses!2ses!4v1571586752460!5m2!1ses!2ses" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</body>
{{$shops[1]}}
@stop