$().ready(function() {
    $("#mainForm").validate({
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
      }
    },
    messages : {
      pseudo : "Veuillez fournir un pseudo avec au moins 3 lettres",
      content : "Veuillez fournir un message d'au moins 15 lettres",
      email : "L'email est incorrect"
    },
    submitHandler : function(form) {
      $.ajax({
        type: "POST",
        url: "src/Controller/ControllerMail.php",
        data: $(form).serialize(),
        success: function () {
           alert('Votre message est bien envoyé!');
        }
    });
    return false; // required to block normal submit since you used ajax
      },
   });
  });
  