@extends('layouts.master')
@section('content')
<div id="formContainer">
    <h1 class="trn" data-trn-key="productFormTitle">Inserción de nuevo producto</h1>
    <form id="newProduct" enctype ="multipart/form-data" action="/producto" method="POST">
        @csrf
        <div class="field">
            <label class="trn" data-trn-key="productFormName">Nombre del producto</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="field">
            <label class="trn" data-trn-key="productFormPhoto">Foto</label>
            <input type="file" name="photo" id="photo">
        </div>
        <div class="field">
            <label>Stock</label>
            <input type="number" min="1" max="5" step="1" name="stock" id="stock"><br>
        </div>
        <div class="field">
            <label>Precio</label>
            <input type="number" min="1.00" max="999.99" step="0.01" id="price" name="price"><br>
        </div>
        <div class="field">
            <label class="trn" data-trn-key="productFormLanguage">Idioma</label>
            <label class="radioOption"><span class="trn" data-trn-key="productFormBasque">Euskera</span>
                <input type="radio" name="language" value="eu" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="radioOption"><span class="trn" data-trn-key="productFormSpanish">Español</span>
                <input type="radio" name="language" value="es">
                <span class="checkmark"></span>
            </label>
            <label class="radioOption"><span class="trn" data-trn-key="productFormEnglish">Inglés</span>
                <input type="radio" name="language" value="en">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="field">
            <label class="trn" data-trn-key="productFormDescription">Descripción</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div class="field">
        <label class="trn" data-trn-key="productFormVideo">Video</label>
            <input type="url" id="link" name="link">
        </div>
        <!-- Hay que cambiar esto para que tome la id de cada tienda -->
        <input type="hidden" value="1" id="shopId" name="shopId"><br>
        <div class="field submit">
            <input type="image" src="{{asset('assets/images/icons/confirmWhite.png')}}">
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
@stop