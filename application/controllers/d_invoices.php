<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_invoices extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("invoices_model","obj_invoices");
        $this->load->model("invoice_catalog_model","obj_invoice_catalog");
        $this->load->model("kit_model","obj_kit");
    }   
                
    public function index(){  
            //GER SESSION   
            $this->get_session();
            $params = array(
                        "select" =>"invoices.invoice_id,
                                    invoices.date,
                                    invoices.total ,
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
                "where" => "invoices.status_value = 1",
                "order" => "invoices.invoice_id DESC");
            //GET DATA FROM CUSTOMER
            $obj_invoices = $this->obj_invoices->search($params);
            
            /// VISTA
            $this->tmp_mastercms->set("obj_invoices",$obj_invoices);
            $this->tmp_mastercms->render("dashboard/invoices/invoices_list");
    }
    
    public function load($invoice_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        
        if ($invoice_id != ""){
            /// PARAM FOR SELECT 
            $params = array(
                        "select" =>"invoices.invoice_id,
                                    invoices.date,
                                    customer.customer_id,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    kit.price,
                                    kit.kit_id,
                                    invoices.active",
                "join" => array( 'kit, invoices.kit_id = kit.kit_id',
                                 'customer, invoices.customer_id = customer.customer_id'),
                "where" => "invoices.invoice_id = $invoice_id");
            //GET DATA FROM CUSTOMER
            $obj_invoices  = $this->obj_invoices->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_invoices",$obj_invoices);
          }
          
          //SELECT PAQUETES
            $params = array("select" => "");
            $obj_kit  = $this->obj_kit->search($params);   
            //RENDER TO VIEW
            $this->tmp_mastercms->set("obj_kit",$obj_kit); 
      
            $modulos ='facturas'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/invoices/invoices_form");    
    }
    
    public function validate(){
        
        //GET CUSTOMER_ID
        
        $invoice_id = $this->input->post("invoice_id");
        $price = $this->input->post("price");
        $kit_id = $this->input->post("kit");
        $date =  $this->input->post('date');
        $active =  $this->input->post('active');
        //UPDATE DATA
        $data = array(
                'kit_id' => $kit_id,
                'date' => $date,
                'total' => $price,
                'active' => $active,  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
            //SAVE DATA IN TABLE    
            $this->obj_invoices->update($invoice_id, $data);
        redirect(site_url()."dashboard/facturas");
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