<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_home extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("unilevel_model","obj_unilevel");
        $this->load->model("ranges_model","obj_ranges");
        $this->load->model("commissions_model","obj_commissions");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        //GET CUSTOMER_ID
        $customer_id = $_SESSION['customer']['customer_id'];
        $active_month = $_SESSION['customer']['active_month'];
        //GET DATA CUSTOMER
        $params = array(
                        "select" =>"customer.username,
                                    customer.active,
                                    customer.date_month,
                                    unilevel.position_temporal,
                                    unilevel.unilevel_id,
                                    unilevel.ident,
                                    kit.name as kit,
                                    kit.kit_id,
                                    kit.img as kit_img",
                        "where" => "customer.customer_id = $customer_id and customer.status_value = 1",
                        "join" => array('kit, customer.kit_id = kit.kit_id',
                                        'unilevel, customer.customer_id = unilevel.customer_id'),
                        );
        $obj_customer = $this->obj_customer->get_search_row($params);
        $date_month = $obj_customer->date_month;
        
        $date = date("Y-m-d");
        if($date_month != null){
            if($date_month < $date){
                
                //UPDATE SESSION
                $data_month = 0;
                $this->update_session_active_month($data_month);
                //update customer table
                $data = array(
                    'active_month' => 0,
                    'date_start' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                    'updated_by' => $customer_id
                ); 
                $this->obj_customer->update($customer_id,$data);
                $result_date = 0;
                $this->tmp_backoffice->set("result_date",$result_date);
            }else{
                $date1 = new DateTime($date);
                $date2 = new DateTime($date_month);
                $diff = $date1->diff($date2);
                $result_date = $diff->days;
                $this->tmp_backoffice->set("result_date",$result_date);
            }
        }
        
        if($customer_id == 1){
            $params = array(
                        "select" =>"count(*) as total_binary,
                                    (select count(*) FROM unilevel WHERE unilevel.parend_id = $customer_id and unilevel.status_value = 1) as total_referred");
        }else{
                $params = array(
                        "select" =>"count(*) as total_binary,
                                    (select count(*) FROM unilevel WHERE unilevel.parend_id = $customer_id and unilevel.status_value = 1) as total_referred",
                        "where" => "ident like '%$obj_customer->ident' and ident <> '$obj_customer->ident'"
                        );
        }
        $obj_total_referidos = $this->obj_unilevel->get_search_row($params);
        
        //GET DATA COMISION
                $params = array(
                        "select" =>"commissions.amount,
                                    commissions.date,
                                    customer.username,
                                    commissions.status_value,
                                    bonus.name as bonus",
                "join" => array( 'bonus, commissions.bonus_id = bonus.bonus_id',
                                 'invoices, commissions.invoice_id = invoices.invoice_id',
                                 'customer, invoices.customer_id = customer.customer_id'),
                "where" => "commissions.customer_id = $customer_id and commissions.active = 1",
                "order" => "commissions.commissions_id DESC",
                "limit" => "10");
           //GET DATA FROM CUSTOMER
        $obj_commissions = $this->obj_commissions->search($params);
        
        
        //GET MONTH AND YEAR
        $month = date('m');
        $year = date('Y');
        $first_day = first_month_day($month, $year);
        $last_day = last_month_day($month, $year);
        
        //GET TOTAL COMMISION
        $params = array(
                "select" =>"sum(amount) as total_comissions,
                            (select sum(amount) FROM commissions WHERE customer_id = $customer_id AND active = 1 AND date BETWEEN '$first_day' AND '$last_day') as commission_by_date,
                            (select sum(amount) FROM commissions WHERE customer_id = $customer_id AND status_value = 1) as total_disponible",
        "where" => "customer_id = $customer_id and active = 1");
           //GET DATA FROM CUSTOMER
        $obj_total_commissions = $this->obj_commissions->get_search_row($params);
        
        $this->tmp_backoffice->set("obj_total_commissions",$obj_total_commissions);
        $this->tmp_backoffice->set("obj_commissions",$obj_commissions);
        $this->tmp_backoffice->set("obj_total_referidos",$obj_total_referidos);
        $this->tmp_backoffice->set("obj_customer",$obj_customer);
        $this->tmp_backoffice->set("active_month",$active_month);
        $this->tmp_backoffice->render("backoffice/b_home");
    }
    
    public function side_binary(){          
        
        if ($this->input->is_ajax_request()) {
            $side_id = $this->input->post("side_id");
            $unilevel_id = $this->input->post("unilevel_id");
            $customer_id = $_SESSION['customer']['customer_id'];
            //UPDATE UNILEVEL POSITION
            $data_invoice = array(
                    'position_temporal' => "$side_id",
                    'updated_at' => date("Y-m-d H:i:s"),
                    'updated_by' => $customer_id,
                );
            $this->obj_unilevel->update($unilevel_id, $data_invoice);
            
            $data['status'] = true;
            $data['message'] = "Posición alterada con éxito";
            //SEND DATA
            echo json_encode($data);
            
        }
    }  
    
    public function update_session_active_month($data_month){          
        $data_customer_session['customer_id'] = $_SESSION['customer']['customer_id'];
        $data_customer_session['name'] = $_SESSION['customer']['name'];
        $data_customer_session['username'] = $_SESSION['customer']['username'];
        $data_customer_session['email'] = $_SESSION['customer']['email'];
        $data_customer_session['kit_id'] = $_SESSION['customer']['kit_id'];
        $data_customer_session['active_month'] = $data_month;
        $data_customer_session['active'] = $_SESSION['customer']['active'];
        $data_customer_session['logged_customer'] = "TRUE";
        $data_customer_session['status'] = $_SESSION['customer']['status'];
        $_SESSION['customer'] = $data_customer_session; 
    }  
    
    public function get_session(){          
        if (isset($_SESSION['customer'])){
            if($_SESSION['customer']['logged_customer']=="TRUE" && $_SESSION['customer']['status']=='1'){               
                return true;
            }else{
                redirect(site_url().'home');
            }
        }else{
            redirect(site_url().'home');
        }
    }
}