function edit_invoices(invoice_id){    
     var url = 'dashboard/facturas/load/'+invoice_id;
     location.href = site+url;   
}
function edit_invoices_catalogo(invoice_id){    
     var url = 'dashboard/facturas_catalogo/load/'+invoice_id;
     location.href = site+url;   
}
function cancelar_invoice(){
	var url= 'dashboard/facturas';
	location.href = site+url;
}
function cancelar_invoice_catalogo(){
	var url= 'dashboard/facturas_catalogo';
	location.href = site+url;
}
function ver_invoices_catalogo(invoice_id){    
     var url = 'dashboard/facturas/ver/'+invoice_id;
     location.href = site+url;   
}
function back_list(){    
     var url = 'dashboard/facturas_catalogo';
     location.href = site+url;   
}



