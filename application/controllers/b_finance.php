<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_finance extends CI_Controller {
     function __construct() {
        parent::__construct();
          $this->load->model("customer_model","obj_customer");
          $this->load->model("commissions_model","obj_commissions");
          $this->load->model("invoices_model","obj_invoices");

    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        
        //GET PLAN INFORMATION
        $params = array("select" =>"sum(amount) as total_maching,
                                    (SELECT sum(amount) FROM commissions WHERE customer_id = $customer_id and bonus_id = 1 and status_value = 1) as total_direct,
                                    (SELECT sum(amount) FROM commissions WHERE customer_id = $customer_id and bonus_id = 2 and status_value = 1) as total_unilevel,
                                    (SELECT sum(amount) FROM commissions WHERE customer_id = $customer_id and status_value = 1) as total",
                        "where" => "customer_id = $customer_id and bonus_id = 3 and status_value = 1",
                                    );
        $obj_total = $this->obj_commissions->get_search_row($params);
        
        //GET DATA COMISION
                $params = array(
                        "select" =>"commissions.commissions_id,
                                    commissions.amount,
                                    commissions.date,
                                    customer.username,
                                    commissions.status_value,
                                    bonus.name as bonus",
                "join" => array( 'bonus, commissions.bonus_id = bonus.bonus_id',
                                 'invoices, commissions.invoice_id = invoices.invoice_id',
                                 'customer, invoices.customer_id = customer.customer_id'),
                "where" => "commissions.customer_id = $customer_id and commissions.status_value = 1",
                "order" => "commissions.commissions_id DESC",
                "limit" => "100");
           //GET DATA FROM CUSTOMER
        $obj_commissions = $this->obj_commissions->search($params);

        //GET PRICE CURRENCY
        $this->tmp_backoffice->set("obj_commissions",$obj_commissions);
        $this->tmp_backoffice->set("obj_total",$obj_total);
        $this->tmp_backoffice->render("backoffice/b_history");
    }
    
    public function invoice(){
        //GET SESION ACTUALY
        $this->get_session();
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        
        //GET DATA COMISION
        //TYPE 1 -  plan
        //TYPE 2 -  catalog
                $params = array(
                        "select" =>"invoices.invoice_id,
                                    invoices.date,
                                    invoices.recompra,
                                    kit.price,
                                    kit.name,
                                    invoices.active",
                "join" => array( 'kit, invoices.kit_id = kit.kit_id'),
                "where" => "invoices.customer_id = $customer_id and invoices.status_value = 1",
                "order" => "invoices.invoice_id DESC");
           //GET DATA FROM CUSTOMER
        $obj_invoices = $this->obj_invoices->search($params);

        //GET PRICE CURRENCY
        $this->tmp_backoffice->set("obj_invoices",$obj_invoices);
        $this->tmp_backoffice->render("backoffice/b_invoice");
    }
    
    public function invoice_detail($invoice_id){
        //GET SESION ACTUALY
        $this->get_session();
        /// VISTA

        $customer_id = $_SESSION['customer']['customer_id'];
        //GET DATA PRICE CRIPTOCURRENCY
        $params = array(
                        "select" =>"customer.username,
                                    customer.email,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.phone,
                                    customer.dni,
                                    customer.active,
                                    paises.nombre",
                        "where" => "customer.customer_id = $customer_id and customer.status_value = 1 and paises.id_idioma = 7",
                        "join" => array('paises, customer.country = paises.id'),
                        );

        $obj_customer = $this->obj_customer->get_search_row($params);
        
         $params = array(
                        "select" =>"invoices.invoice_id,
                                    invoices.date,
                                    invoices.recompra,
                                    invoices.operacion,
                                    invoices.total,
                                    kit.price,
                                    kit.name,
                                    invoices.active",
                "join" => array( 'kit, invoices.kit_id = kit.kit_id'),
                "where" => "invoices.invoice_id = $invoice_id and invoices.status_value = 1");
           //GET DATA FROM CUSTOMER
        $obj_invoices = $this->obj_invoices->get_search_row($params);

        //GET PRICE CURRENCY
        $this->tmp_backoffice->set("obj_customer",$obj_customer);
        $this->tmp_backoffice->set("obj_invoices",$obj_invoices);
        $this->tmp_backoffice->render("backoffice/b_invoice_detail");
    }
    
    public function upload(){
        //GET SESION ACTUALY
        $this->get_session();
        $customer_id = $_SESSION['customer']['customer_id'];
        $invoice_id = $_POST['invoice_id'];
        $operacion = $_POST['operacion'];
        
        //VERIFI ONLY 1 ROW 
            if(isset($_FILES["image_file"]["name"]))
            {
            $config['upload_path']          = './static/backoffice/invoice/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1000;
            $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('image_file'))
                {
                     $error = array('error' => $this->upload->display_errors());
                      echo '<div class="alert alert-danger">'.$error['error'].'</div>';
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());

                        $img = $_FILES["image_file"]["name"];
                    // INSERT ON TABLE activation_message
                        //UPDATE DATA EN CUSTOMER TABLE
                        $data = array(
                            'img' => $img,
                            'operacion' => $operacion,
                            'active' => 1,
                            'updated_by' => $customer_id,
                            'updated_at' => date("Y-m-d H:i:s")
                        ); 
                        $this->obj_invoices->update($invoice_id,$data);
                        $data['status'] = "true";
                    echo '<div class="alert alert-success" style="text-align: center">Enviado Exitosamente</div>';
                }
            }
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


    
