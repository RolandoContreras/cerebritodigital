function save_video_home(){
    var video_home = document.getElementById("video_home").value;
           $.ajax({
               type: "post",
               url: site+"dashboard/panel/save_video_home",
               dataType: "json",
               data: {video_home:video_home},
               success:function(data){
                   $("#res_panel").html();
                    var texto = "";
                    texto = texto+'<div class="alert alert-success">';
                    texto = texto+'<p style="text-align: center;">Guardado con éxito</p>';
                    texto = texto+'</div>';                 
                    $("#res_panel").html(texto);
               location.reload();
               }         
           });
          
}