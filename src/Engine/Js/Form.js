$().ready(function () {

  $("#mainForm").validate({
    rules: {
      pseudo: {
        required: true,
        minlength: 3
      },
      content: {
        required: true,
        minlength: 15
      },
      email: {
        required: true,
      }
    },
    messages: {
      pseudo: "Veuillez fournir un pseudo avec au moins 3 lettres",
      content: "Veuillez fournir un message d'au moins 15 lettres",
      email: "L'email est incorrect"
    },

    submitHandler: function () {

      const pseudo = $('#pseudo').val();
      const email = $('#email').val();
      const message = $('#content').val();
      console.log(pseudo);
      console.log(email);
      console.log(message);
      var dataString = 'pseudo=' + pseudo + '&email=' + email + '&content=' + message
      $.ajax({
        url: "src/Controller/ControllerMail.php",
        data: dataString,
        type: "POST",
        success: function (data) {
          console.log(data);
          alert('Votre message est bien envoyé!');
        },
        error: function () {
          alert('Votre message n\'a pas été envoyé!');
        }
      });
      return false; // required to block normal submit since you used ajax
    },
  });
});