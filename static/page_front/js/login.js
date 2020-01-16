function login(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var response = grecaptcha.getResponse();
    if(response.length == 0){
            $("#res_login").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Captcha no verificado</p>';
            texto = texto+'</div>';                 
            $("#res_login").html(texto);
    }else{
    
        if(username == ""){
            $("#res_login").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Ingrese su usuario</p>';
            texto = texto+'</div>';                 
            $("#res_login").html(texto);
            $("#username").focus();
        }else if(password == ""){
            $("#res_login").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Ingrese su contraseña</p>';
            texto = texto+'</div>';                 
            $("#res_login").html(texto);
            $("#password").focus();
        }else{
            $.ajax({
               type: "post",
               url: site+"login/validate",
               dataType: "json",
               data: {username : username,
                      password : password},
               success:function(data){          
                   if(data.status == "true"){
                       $("#res_login").html();
                        var texto = "";
                        texto = texto+'<div class="alert alert-success">';
                        texto = texto+'<p style="text-align: center;">Bienvenido</p>';
                        texto = texto+'</div>';                 
                        $("#res_login").html(texto);
                       location.href = site + "backoffice";
                   }else{
                       $("#res_login").html();
                        var texto = "";
                        texto = texto+'<div class="alert alert-danger">';
                        texto = texto+'<p style="text-align: center;">Los datos no coinciden</p>';
                        texto = texto+'</div>';                 
                        $("#res_login").html(texto);
                        $("#username").focus();
                   }
               }         
             });
            }
        }
}

function validar_email( email ){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}