
function validateForm(formName) {

    if (formName != "false") {

        frmvalidator = new Validator(formName);
        frmvalidator.clearAllValidations;
        frmvalidator.addValidation("name", "req", eval("dictionary.nameEmpty." + sessionStorage.getItem("language")));
        frmvalidator.addValidation("name", "maxlen=80", eval("dictionary.nameLength." + sessionStorage.getItem("language")));
        frmvalidator.addValidation("name", "alphanumeric_space", eval("dictionary.nameCharacters." + sessionStorage.getItem("language")));

        frmvalidator.addValidation("description", "req", eval("dictionary.descriptionEmpty." + sessionStorage.getItem("language")));
        frmvalidator.addValidation("description", "maxlen=230", eval("dictionary.descriptionLength." + sessionStorage.getItem("language")));
        frmvalidator.addValidation("description", "regexp=/^[A-Za-z0-9., áéíóúÁÉÍÓÚ]{1,230}$/", eval("dictionary.descriptionCharacters." + sessionStorage.getItem("language")));

        frmvalidator.addValidation("stock", "req", eval("dictionary.stockEmpty." + sessionStorage.getItem("language")));
        frmvalidator.addValidation("price", "req", eval("dictionary.priceEmpty." + sessionStorage.getItem("language")));
        frmvalidator.addValidation("photo", "req", eval("dictionary.fileEmpty." + sessionStorage.getItem("language")));

    }
}