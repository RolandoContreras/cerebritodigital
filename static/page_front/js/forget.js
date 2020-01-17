function forget(){
    var user_pass = document.getElementById("user_pass").value;
    //GET DATA RECAPTCHA
    var response = grecaptcha.getResponse();
        if(response.length == 0){
                    $("#res_forget").html();
                    var texto = "";
                    texto = texto+'<div class="alert alert-danger">';
                    texto = texto+'<p style="text-align: center;">Captcha no verificado</p>';
                    texto = texto+'</div>';                 
                    $("#res_forget").html(texto);
        }else{
            if(user_pass == ""){
                    $("#res_forget").html();
                    var texto = "";
                    texto = texto+'<div class="alert alert-danger">';
                    texto = texto+'<p style="text-align: center;">Ingrese su Usuario</p>';
                    texto = texto+'</div>';                 
                    $("#res_forget").html(texto);
                    $("#user_pass").focus();
            }else{
                   $.ajax({
                        type: "post",
                        url: site+"forget/recover_pass",
                        dataType: "json",
                        data: {user_pass : user_pass},
                   success:function(data){
                       if(data.status == true){
                           $("#res_forget").html();
                            var texto = "";
                            texto = texto+'<div class="alert alert-success">';
                            texto = texto+'<p style="text-align: center;">Mensaje Enviado con éxito</p>';
                            texto = texto+'</div>';                 
                            $("#res_forget").html(texto);
                       }else{
                           $("#res_forget").html();
                            var texto = "";
                            texto = texto+'<div class="alert alert-danger">';
                            texto = texto+'<p style="text-align: center;">Usurio no registrado</p>';
                            texto = texto+'</div>';                 
                            $("#res_forget").html(texto);
                       }
                   }         
                 });
        }
    }
}