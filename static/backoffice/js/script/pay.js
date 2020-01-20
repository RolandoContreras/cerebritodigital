function make_pay(){
      var amount = document.getElementById("amount").value;
      var tax =  document.getElementById("tax").value;
      var result = document.getElementById("result").value;
      var total_disponible = document.getElementById("total_disponible").value;
      
      if(amount == ""){
          $("#pay_alert").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">El importe es invalido</p>';
            texto = texto+'</div>';                 
            $("#pay_alert").html(texto);
          $("#amount").focus();
      }else if(tax == ""){
          $("#pay_alert").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">El importe es invalido</p>';
            texto = texto+'</div>';                 
            $("#pay_alert").html(texto);
      }else if(result == ""){
          $("#pay_alert").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger">';
            texto = texto+'<p style="text-align: center;">El importe es invalido</p>';
            texto = texto+'</div>';                 
            $("#pay_alert").html(texto);
      }else{
          if(result > total_disponible){
              $("#pay_alert").html();
                var texto = "";
                texto = texto+'<div class="alert alert-danger">';
                texto = texto+'<p style="text-align: center;">El importe es invalido</p>';
                texto = texto+'</div>';                 
                $("#pay_alert").html(texto);
          }else{
              $.ajax({
                type: "post",
                url: site + "backoffice/pay/make_pay",
                dataType: "json",
                data: {amount: amount,
                       tax:tax,
                       result:result,
                       total_disponible:total_disponible},
                success:function(data){
                    if(data.status == true){
                        $("#pay_alert").html();
                        var texto = "";
                        texto = texto+'<div class="alert alert-success">';
                        texto = texto+'<p style="text-align: center;">.'+ data.message +'.</p>';
                        texto = texto+'</div>';                 
                        $("#pay_alert").html(texto);
                        location.reload();
                    }else{
                        $("#pay_alert").html();
                        var texto = "";
                        texto = texto+'<div class="alert alert-danger">';
                        texto = texto+'<p style="text-align: center;">'+ data.message +'</p>';
                        texto = texto+'</div>';                 
                        $("#pay_alert").html(texto);
                    }
                }            
            });
          }
          
      }
        
        
}

function validate_amount(amount){
        $.ajax({
        type: "post",
        url: site + "backoffice/pay/validate_amount",
        dataType: "json",
        data: {amount: amount},
        success:function(data){
            document.getElementById("tax").value = data.tax;
            document.getElementById("result").value = data.result;
        }            
        });
}

function Numtext(string){//solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = '.1234567890';//Caracteres validos
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
	     out += string.charAt(i);
    return out;
}