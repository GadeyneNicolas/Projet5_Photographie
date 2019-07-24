class Form {

    init() {
        this.form();
    }

    form() {
        $(`#mainForm`).validate({
            rules : {
                pseudo : {
                    required : true,
                    minlength : 3
                },
                content : {
                    required : true,
                    minlength : 15
                },
                email : {
                    required : true,
                    minlength : 10,
                }
            },
            messages : {
                pseudo : `Veuillez fournir un pseudo avec au moins 3 lettres`,
                content : `Veuillez fournir un message d'au moins 15 lettres`,
                email : `L'email est incorrect`
            },
            submitHandler : function(form) {
                const fd = new FormData(form);
                $.ajax({
                    type: `POST`,
                    url: `index.php?action=Mail`,
                    data: fd,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                      alert(response);
                    }
                });
            return false; // required to block normal submit since you used ajax
            },
        });
    }
}

$(document).ready(function () { // fonction de l'Appli
    const formulaire = new Form();
    formulaire.init();
});