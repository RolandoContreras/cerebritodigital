function change_state(comment_id){
         $.ajax({
                   type: "post",
                   url: site+"dashboard/comentarios/cambiar_status",
                   dataType: "json",
                   data: {comment_id : comment_id},
                   success:function(data){                             
                   location.reload();
                   }         
           });
}
function change_state_no(comment_id){
         $.ajax({
                   type: "post",
                   url: site+"dashboard/comentarios/cambiar_status_no",
                   dataType: "json",
                   data: {comment_id : comment_id},
                   success:function(data){                             
                   location.reload();
                   }         
           });

}
