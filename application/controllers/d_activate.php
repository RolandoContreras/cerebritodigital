<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_activate extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("commissions_model","obj_commissions");
        $this->load->model("invoices_model","obj_invoices");
        $this->load->model("invoice_catalog_model","obj_invoice_catalog");
        $this->load->model("unilevel_model","obj_unilevel");
        $this->load->model("kit_model","obj_kit");
        $this->load->model("bonus_model","obj_bonus");
        $this->load->model("binarys_model","obj_binarys");
    }   
                
    public function index(){  
        
           $this->get_session();
           $params = array(
                        "select" =>"invoices.invoice_id,
                                    invoices.date,
                                    invoices.total,
                                    invoices.img,
                                    invoices.operacion,
                                    customer.customer_id,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    kit.kit_id,
                                    kit.price,
                                    kit.name,
                                    invoices.active",
                "join" => array( 'kit, invoices.kit_id = kit.kit_id',
                                 'customer, invoices.customer_id = customer.customer_id'),
                "where" => "invoices.recompra = 0 and invoices.status_value = 1",
                "order" => "invoices.invoice_id DESC");
           //GET DATA FROM CUSTOMER
        $obj_invoices = $this->obj_invoices->search($params);
           
           /// PAGINADO
            $modulos ='activaciones'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/activaciones'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_invoices",$obj_invoices);
            $this->tmp_mastercms->render("dashboard/activate/activate_list");
    }
    
    public function recompra(){  
        
           $this->get_session();
           $params = array(
                        "select" =>"invoices.invoice_id,
                                    invoices.date,
                                    invoices.total,
                                    invoices.img,
                                    invoices.operacion,
                                    customer.customer_id,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    kit.kit_id,
                                    kit.price,
                                    kit.name,
                                    invoices.active",
                "join" => array( 'kit, invoices.kit_id = kit.kit_id',
                                 'customer, invoices.customer_id = customer.customer_id'),
                "where" => "invoices.recompra = 1 and invoices.status_value = 1",
                "order" => "invoices.invoice_id ASC");
           //GET DATA FROM CUSTOMER
        $obj_invoices = $this->obj_invoices->search($params);
        
           /// PAGINADO
            $modulos ='activaciones'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/activaciones'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_invoices",$obj_invoices);
            $this->tmp_mastercms->render("dashboard/activate/activate_list");
    }
    
    public function active(){
        //ACTIVE CUSTOMER NORMALY
        if($this->input->is_ajax_request()){  
                date_default_timezone_set('America/Lima');
                //SELECT CUSTOMER_ID
                $invoice_id = $this->input->post("invoice_id");
                $customer_id = $this->input->post("customer_id");
                $kit_id = $this->input->post("kit_id");
                $total = $this->input->post("total");
                
                    //GET DATA CUSTOMER UNILEVEL
                    $params = array(
                            "select" =>"ident,
                                        parend_id,
                                        position",
                            "where" => "customer_id = $customer_id"
                    );
                    //GET DATA FROM BONUS
                    $obj_unilevel = $this->obj_unilevel->get_search_row($params);
                    
                    //INSERT AMOUNT ON COMMISION TABLE  type REFERRED  
                    $this->pay_direct($invoice_id, $obj_unilevel->parend_id,$obj_unilevel->position, $total);
                    if(isset($obj_unilevel->ident) != ""){
                        $ident = $obj_unilevel->ident;
                        //INSERT AMOUNT ON COMMISION TABLE    
                        $this->add_point_binary($ident,$total);
                    }
                    
                    $date_month =date("Y-m-d", strtotime("+30 day"));
                       //UPDATE TABLE CUSTOMER ACTIVE = 1    
                        $data = array(
                            'date_month' => $date_month,
                            'active_month' => 1,
                            'active' => 1,
                            'kit_id' => $kit_id,
                            'date_start' => date("Y-m-d H:i:s"),
                            'updated_at' => date("Y-m-d H:i:s"),
                            'updated_by' => $_SESSION['usercms']['user_id'],
                        ); 
                        $this->obj_customer->update($customer_id,$data);
                        //update session actuality
                        $data_month = 1;
                        
                 //UPDATE TABLE INVOICE ACTIVE = 2 (PROCESADO)    
                    $data_invoice = array(
                        'active' => 2,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_invoices->update($invoice_id,$data_invoice);   
                
                echo json_encode($data); 
                exit();
            }
    }
    
    public function activaciones_recompra(){  
        
           $this->get_session();
           $params = array(
                        "select" =>"invoices.invoice_id,
                                    invoices.date,
                                    invoices.total,
                                    invoices.img,
                                    customer.customer_id,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    invoices.active",
                "join" => array('customer, invoices.customer_id = customer.customer_id'),
                "where" => "invoices.type = 2 and invoices.status_value = 1",
                "order" => "invoices.invoice_id ASC");
           //GET DATA FROM CUSTOMER
        $obj_invoices = $this->obj_invoices->search($params);
           
           /// PAGINADO
            $modulos ='activaciones'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/activaciones'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_invoices",$obj_invoices);
            $this->tmp_mastercms->render("dashboard/activate/activate_catalogo_list");
    }
    
    public function pay_direct($invoice_id,$parend_id,$position, $total){
                
                if($parend_id <> 0){
                    //calcule comission 20%
                    $amount = $total * 0.2;
                    //save comission
                    $data = array(
                    'invoice_id' => $invoice_id,
                    'customer_id' => $parend_id,
                    'bonus_id' => 1,
                    'amount' => $amount,
                    'active' => 1,
                    'status_value' => 1,
                    'date' => date("Y-m-d H:i:s"),
                    'created_at' => date("Y-m-d H:i:s"),
                    'created_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_commissions->insert($data);
                    
                    //GET DATA PARENT
                    $params = array(
                            "select" =>"unilevel_id,
                                        point_calification_left,
                                        point_calification_rigth,
                                        binaries_active",
                            "where" => "customer_id = $parend_id"
                    );
                    //GET DATA FROM BONUS
                    $obj_unilevel_parent = $this->obj_unilevel->get_search_row($params);
                    
                    if($obj_unilevel_parent->binaries_active == 0){
                        //update calification binary
                        if($position == 1){
                                $data = array(
                                    'point_calification_left' => 1,
                                    'updated_at' => date("Y-m-d H:i:s"),
                                    'updated_by' => $_SESSION['usercms']['user_id'],
                                ); 
                                $this->obj_unilevel->update($obj_unilevel_parent->unilevel_id, $data);
                                //verify binario
                                if($obj_unilevel_parent->point_calification_rigth == 1){
                                    $data = array(
                                        'binaries_active' => 1,
                                        ); 
                                    $this->obj_unilevel->update($obj_unilevel_parent->unilevel_id, $data);
                                }
                        }else{
                                 $data = array(
                                    'point_calification_rigth' => 1,
                                    'updated_at' => date("Y-m-d H:i:s"),
                                    'updated_by' => $_SESSION['usercms']['user_id'],
                                    ); 
                                $this->obj_unilevel->update($obj_unilevel_parent->unilevel_id, $data);
                                //verify binario
                                if($obj_unilevel_parent->point_calification_left == 1){
                                    $data = array(
                                        'binaries_active' => 1,
                                        ); 
                                    $this->obj_unilevel->update($obj_unilevel_parent->unilevel_id, $data);
                                }
                        }
                    }
                }
                
                //verify active binary
                
                
        }    
    
    public function add_point_binary($ident,$total){
                
            $array_identificador =  explode(',', $ident);
            foreach ($array_identificador as $key => $value) {
                if($key <= 59){
                    $identificador = substr(str_replace($value, "", $ident),1);
                    $where = "unilevel.ident = '$identificador' and customer.customer_id <> 0";
                    //GET DATA CUSTOMER
                    $params = array(
                        "select" =>"customer.customer_id,
                                    unilevel.position,
                                    customer.kit_id",
                         "join" => array('customer, unilevel.customer_id = customer.customer_id'),
                         "where" => $where);
                    $obj_unilevel = $this->obj_unilevel->get_search_row($params);
                    
                        if(isset($obj_unilevel->customer_id) != ""){
                            //INSERT POINT ON BINARYS TABLE
                           $rest = substr("$value", -1); 
                            if($rest == "z"){
                                $leg = 'point_left';
                            }else{
                                $leg = 'point_rigth';
                            }
                              //INSERT POINT LEG ON BINARYS TABLE
                                if($obj_unilevel->kit_id == 2){
                                    $data = array(
                                        'customer_id' => $obj_unilevel->customer_id,
                                        "$leg" => $total,
                                        'created_by' => $obj_unilevel->customer_id,
                                        'status_value' => 1,
                                        'created_at' => date("Y-m-d H:i:s"),
                                    ); 
                                    $this->obj_binarys->insert($data);
                                }else{
                                    if($key <= 12){
                                         $data = array(
                                            'customer_id' => $obj_unilevel->customer_id,
                                            "$leg" => $total,
                                            'created_by' => $obj_unilevel->customer_id,
                                            'status_value' => 1,
                                            'created_at' => date("Y-m-d H:i:s"),
                                        ); 
                                        $this->obj_binarys->insert($data);
                                    }
                                }
                        }
                        $ident = $identificador;
                }
            }
    }    
        
    public function get_session(){          
        if (isset($_SESSION['usercms'])){
            if($_SESSION['usercms']['logged_usercms']=="TRUE" && $_SESSION['usercms']['status']==1){               
                return true;
            }else{
                redirect(site_url().'dashboard');
            }
        }else{
            redirect(site_url().'dashboard');
        }
    }
}
?>