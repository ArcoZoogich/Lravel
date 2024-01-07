/**
 * script pour la verification de l'enregistremnment d'utilisateurs
 *
 */
$('#register-user').click( function() {
   var firstname = $('#firstname').val();
   var lastname = $('#lastname').val();
   var email = $('#email').val();
   var password = $('#password').val();
   var password_confirm = $('#password-confirm').val();
   var passwordlength = password.length;
   var agreeTerms = $('#agreeTerms');

   if (firstname != "" &&  /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(firstname)){

    $('#firstname').removeClass('is-invalid');
    $('#firstname').addClass('is-valid');
    $('#error-register-firstname').text("");
    alert('working');
  }else{
    $('#firstname').addClass('is-invalid');
    $('#firstname').removeClass('is-valid');
    $('#error-register-firstname').text("First Name is not valid");
  }
  if (lastname != "" &&  /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(lastname)){

    $('#lastname').removeClass('is-invalid');
    $('#lastname').addClass('is-valid');
    $('#error-register-lastname').text("");
    alert('working');

  }else{
    $('#lastname').addClass('is-invalid');
    $('#lastname').removeClass('is-valid');
    $('#error-register-lastname').text("Last Name is not valid");
  }


  if (email != "" && /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)){

    $('#email').removeClass('is-invalid');
    $('#email').addClass('is-valid');
    $('#error-register-email').text("");
    alert('working');

  }else{
    $('#email').addClass('is-invalid');
    $('#email').removeClass('is-valid');
    $('#error-register-email').text("Email is not valid");
  }

  if( passwordlength >=8 ){
    $('#password').removeClass('is-invalid');
    $('#password').addClass('is-valid');
    $('#error-register-password').text("");

  }else{
    $('#password').addClass('is-invalid');
    $('#password').removeClass('is-valid');
    $('#error-register-password').text("You password must be at last 8 character");


}


if( password== password_confirm ){
    $('#password-confirm ').removeClass('is-invalid');
    $('#password-confirm ').addClass('is-valid');
    $('#error-register-password-confirm ').text("");
   console.log('gg');

  }else{
    $('#password-confirm ').addClass('is-invalid');
    $('#password-confirm ').removeClass('is-valid');
    $('#error-register-password-confirm').text("You password must be identical");
}

if(agreeTerms.is(':checked')){
    $('#agreeTerms').removeClass('is-invalid');
    $('#agreeTerms').addClass('is-valid');
    $('#error-register-agreeTerms').text("");

}else{

    $('#agreeTerms').addClass('is-invalid');
    $('#agreeTerms').removeClass('is-valid');
    $('#error-register-agreeTerms').text("You must allow our Terms");

}

});


$('agreeTerms').change(function () {

    var agreeTerms=$('#agreeTerms');

    if(agreeTerms.is(':checked')){
        $('#agreeTerms').removeClass('is-invalid');
        $('#error-register-agreeTerms').text("");
        console.log("h");

    }else{

        $('#agreeTerms').addClass('is-invalid');
        $('#error-register-agreeTerms').text("You must allow our Terms");

    }
});
