<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_point_binary extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("binarys_model","obj_binarys");
    }   
                
    public function index(){  
            //GER SESSION   
            $this->get_session();
            $params = array(
                        "select" =>"binarys.binary_id,
                                    binarys.point_left,
                                    binarys.point_rigth,
                                    binarys.status_value,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    binarys.created_at",
                        "join" => array('customer, customer.customer_id = binarys.customer_id'),
                         "order" => "binarys.binary_id DESC"              
                                        );            
            
            //GET DATA COMMISSIONS
            $obj_binarys= $this->obj_binarys->search($params);
            /// VISTA
            $this->tmp_mastercms->set("obj_binarys",$obj_binarys);
            $this->tmp_mastercms->render("dashboard/puntos_binario/point_binary_list");
    }
    
    public function load($binarys_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        
        if ($binarys_id != ""){
            /// PARAM FOR SELECT 
            $params = array(
                        "select" =>"binarys.binary_id,
                                    binarys.point_left,
                                    binarys.point_rigth,
                                    binarys.status_value,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    binarys.created_at",
                         "where" => "binary_id = $binarys_id",
                         "join" => array('customer, customer.customer_id = binarys.customer_id'),
            ); 
            $obj_binarys= $this->obj_binarys->get_search_row($params);
            //RENDER
            $this->tmp_mastercms->set("obj_binarys",$obj_binarys);
          }
         $this->tmp_mastercms->render("dashboard/puntos_binario/point_binary_form");    
    }
    
    public function validate(){
        
        $binary_id =  $this->input->post('binary_id');
        $point_left =  $this->input->post('point_left');
        $point_rigth =  $this->input->post('point_rigth');
        $status_value =  $this->input->post('status_value');
        
        //UPDATE DATA
        $data = array(
                'binary_id' => $binary_id,
                'point_left' => $point_left,
                'point_rigth' => $point_rigth,
                'status_value' => $status_value,  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
            //SAVE DATA IN TABLE    
        
            $this->obj_binarys->update($binary_id, $data);
        redirect(site_url()."dashboard/puntos_binario");
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