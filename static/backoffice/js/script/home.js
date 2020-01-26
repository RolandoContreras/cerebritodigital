function go_recompras(){
    var url = "backoffice/recompra";
     location.href = site + url;
}
function side_binary(side_id, unilevel_id){
     $.ajax({
        type: "post",
        url: site + "backoffice/side_binary",
        dataType: "json",
        data: {side_id: side_id,
              unilevel_id:unilevel_id},
        success:function(data){
            if(data.status == true){
                $("#side_binary").html();
                var texto = "";
                texto = texto+'<div class="alert alert-success">';
                texto = texto+'<p style="text-align: center;">.'+ data.message +'.</p>';
                texto = texto+'</div>';                 
                $("#side_binary").html(texto);
                location.reload();
            }else{
                $("#side_binary").html();
                var texto = "";
                texto = texto+'<div class="alert alert-danger">';
                texto = texto+'<p style="text-align: center;">Hubo un Error</p>';
                texto = texto+'</div>';                 
                $("#side_binary").html(texto);
            }
        }            
    });

}