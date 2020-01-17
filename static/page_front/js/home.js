function send_message(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value;
    //GET DATA RECAPTCHA
    var response = grecaptcha.getResponse();
        
        if(response.length == 0){
                    $("#res").html();
                    var texto = "";
                    texto = texto+'<div class="alert alert-danger">';
                    texto = texto+'<button class="close" data-dismiss="alert" type="button">×</button>';
                    texto = texto+'<p style="text-align: center;">Captcha no verificado</p>';
                    texto = texto+'</div>';                 
                    $("#res").html(texto);
        }else{
            if(name == ""){
                    $("#res").html();
                    var texto = "";
                    texto = texto+'<div class="alert alert-danger">';
                    texto = texto+'<button class="close" data-dismiss="alert" type="button">×</button>';
                    texto = texto+'<p style="text-align: center;">Ingrese su Nombre</p>';
                    texto = texto+'</div>';                 
                    $("#res").html(texto);
            $("#name").focus();
        }else if(email == ""){
                    $("#res").html();
                    var texto = "";
                    texto = texto+'<div class="alert alert-danger">';
                    texto = texto+'<button class="close" data-dismiss="alert" type="button">×</button>';
                    texto = texto+'<p style="text-align: center;">Ingrese su E-mail</p>';
                    texto = texto+'</div>';                 
                    $("#res").html(texto);
            $("#email").focus();
        }else if(phone == ""){
                    $("#res").html();
                    var texto = "";
                    texto = texto+'<div class="alert alert-danger">';
                    texto = texto+'<button class="close" data-dismiss="alert" type="button">×</button>';
                    texto = texto+'<p style="text-align: center;">Ingrese su Teléfono</p>';
                    texto = texto+'</div>';                 
                    $("#res").html(texto);
            $("#phone").focus();
        }else if(message == ""){
                    $("#res").html();
                    var texto = "";
                    texto = texto+'<div class="alert alert-danger">';
                    texto = texto+'<button class="close" data-dismiss="alert" type="button">×</button>';
                    texto = texto+'<p style="text-align: center;">Ingrese su Mensaje</p>';
                    texto = texto+'</div>';                 
                    $("#res").html(texto);
            $("#message").focus();
        }else{
            var email_2 = validar_email(email);
            if(email_2 == true){
                   $.ajax({
                   type: "post",
                   url: site+"home/send_messages",
                   dataType: "json",
                   data: {name : name,
                          email : email,
                          phone : phone,
                          message : message
                          },
                   success:function(data){
                       if(data.message == true){
                           $("#res").html();
                            var texto = "";
                            texto = texto+'<div class="alert alert-success">';
                            texto = texto+'<button class="close" data-dismiss="alert" type="button">×</button>';
                            texto = texto+'<p style="text-align: center;">Mensaje Enviado con éxito</p>';
                            texto = texto+'</div>';                 
                            $("#res").html(texto);
                       }
                   }         
                 });
            }else{
                    $("#res").html();
                    var texto = "";
                    texto = texto+'<div class="alert alert-danger">';
                    texto = texto+'<button class="close" data-dismiss="alert" type="button">×</button>';
                    texto = texto+'<p style="text-align: center;">Ingrese un E-mail Valido</p>';
                    texto = texto+'</div>';                 
                    $("#res").html(texto);
                    $("#email").focus();
            }
        }
    }
}

function validar_email( email ){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}