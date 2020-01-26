function register(){
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    var first_name = document.getElementById("first_name").value;
    var last_name = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var dni = document.getElementById("dni").value;
    var phone = document.getElementById("phone").value;
    var country = document.getElementById("country").value;
    var parent_id = document.getElementById("parent_id").value;
    var position_temporal = document.getElementById("position_temporal").value;
    var ident = document.getElementById("ident").value;
    
    var response = grecaptcha.getResponse();
        if(response.length == 0){
            $("#res_register").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Captcha no validado</p>';
            texto = texto+'</div>';                 
            $("#res_register").html(texto);
    }else{
        //validate
        if(user == ""){
            $("#res_register").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Ingrese su usuario</p>';
            texto = texto+'</div>';                 
            $("#res_register").html(texto);
            $("#user").focus();
        }else if(pass == ""){
            $("#res_register").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Ingrese su contraseña</p>';
            texto = texto+'</div>';                 
            $("#res_register").html(texto);
            $("#pass").focus();
        }else if(first_name == ""){
            $("#res_register").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Ingrese su nombre</p>';
            texto = texto+'</div>';                 
            $("#res_register").html(texto);
            $("#first_name").focus();
        }else if(last_name == ""){
            $("#res_register").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Ingrese su apellido</p>';
            texto = texto+'</div>';                 
            $("#res_register").html(texto);
            $("#last_name").focus();
        }else if(dni == ""){
            $("#res_register").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Ingrese su documento</p>';
            texto = texto+'</div>';                 
            $("#res_register").html(texto);
            $("#dni").focus();
        }else if(email == ""){
            $("#res_register").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Ingrese su correo</p>';
            texto = texto+'</div>';                 
            $("#res_register").html(texto);
            $("#email").focus();
        }else if(phone == ""){
            $("#res_register").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Ingrese su teléfono</p>';
            texto = texto+'</div>';                 
            $("#res_register").html(texto);
            $("#phone").focus();
        }else if(country == ""){
            $("#res_register").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">Seleccione su país</p>';
            texto = texto+'</div>';                 
            $("#res_register").html(texto);
            $("#message_pais").focus();
        }else{
            
            var email_2 = validar_email(email);
            if(email_2 == true){
                   $.ajax({
                        type: "post",
                        url: site+"register/validate",
                        dataType: "json",
                        data: {first_name : first_name,
                                parent_id :parent_id,
                                user : user,
                                last_name : last_name,
                                email : email,
                                dni : dni,
                                phone : phone,
                                pass : pass,
                                position_temporal: position_temporal,
                                ident:ident,
                                country : country},
                        success:function(data){
                            if(data.status == "username"){
                                $("#res_register").html();
                                var texto = "";
                                texto = texto+'<div class="alert alert-danger">';
                                texto = texto+'<p style="text-align: center;">El usuario esta tomado</p>';
                                texto = texto+'</div>';                 
                                $("#res_register").html(texto);
                                $("#username").focus();
                            }else{
                                $("#res_register").html();
                                var texto = "";
                                texto = texto+'<div class="alert alert-success">';
                                texto = texto+'<p style="text-align: center;">Usuario Creado con éxito</p>';
                                texto = texto+'</div>';                 
                                $("#res_register").html(texto);
                                location.href = site + "backoffice";
                            }
                        }         
                      }); 
                   
            }else{
                $("#res_register").html();
                                var texto = "";
                                texto = texto+'<div class="alert alert-danger">';
                                texto = texto+'<p style="text-align: center;">Ingrese un e-mail valido</p>';
                                texto = texto+'</div>';                 
                                $("#res_register").html(texto);
                                $("#email").focus();
                $("#email").focus();
            }
        }
    }    
}

function validar_email( email ){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}

function validate_username(username){
    if(username == ""){
        $(".alert-0").removeClass('text-success').addClass('text-danger').html("Usuario Invalido <i class='fa fa-times-circle-o' aria-hidden='true'></i>");
    }else{
        $.ajax({
        type: "post",
        url: site + "register/validate_username",
        dataType: "json",
        data: {username: username},
        success:function(data){            
            if(data.message == "true"){         
                $(".alert-0").removeClass('text-success').addClass('text-danger').html(data.print);
            }else{
                $(".alert-0").removeClass('text-danger').addClass('text-success').html(data.print);
            }
        }            
        });
    }
}

function validate_username_2(username){
    if(username == ""){
        $(".alert-1").removeClass('text-success').addClass('text-danger').html("Usuario Invalido <i class='fa fa-times-circle-o' aria-hidden='true'></i>");
    }else{
        $.ajax({
        type: "post",
        url: site + "register/validate_username_2",
        dataType: "json",
        data: {username: username},
        success:function(data){            
            if(data.message == "true"){
                document.getElementById("parent_id_2").value=data.value;
                $(".alert-1").removeClass('text-danger').addClass('text-success').html(data.print);
            }else{
                $(".alert-1").removeClass('text-success').addClass('text-danger').html(data.print);
            }
        }            
        });
    }
}

function Numtext(string){//solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890';//Caracteres validos
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
	     out += string.charAt(i);
    return out;
}