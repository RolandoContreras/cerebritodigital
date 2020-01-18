function create_invoice_recompra(kit_id,price){
    $.ajax({
       type: "post",
       url: site+"backoffice/plan/create_invoice_recompra",
       dataType: "json",
       data: {kit_id : kit_id,
              price : price},
       success:function(data){          
           if(data.status == "true"){
               location.href = site + "backoffice/invoice";
           }
       }         
     });
}