function login(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
        if(username == ""){
            $("#res_login").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<button class="close" data-dismiss="alert" type="button">×</button>';
            texto = texto+'<p style="text-align: center;">Ingrese su usuario</p>';
            texto = texto+'</div>';                 
            $("#res_login").html(texto);
            $("#username").focus();
        }else if(password == ""){
            $("#res_login").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<button class="close" data-dismiss="alert" type="button">×</button>';
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
                        texto = texto+'<button class="close" data-dismiss="alert" type="button">×</button>';
                        texto = texto+'<p style="text-align: center;">Los datos no coinciden</p>';
                        texto = texto+'</div>';                 
                        $("#res_login").html(texto);
                        $("#username").focus();
                   }
               }         
             });
            }
}

function validar_email( email ){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
function fade_email(string){
    var string = document.getElementById("email").value;
    if(string != ""){ 
        document.getElementById("message_email").style.display = "none";
    }
}
function fade_password(string){
    var string = document.getElementById("password").value;
    if(string != ""){ 
        document.getElementById("message_password").style.display = "none";
    }
}