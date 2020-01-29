<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_network extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("unilevel_model","obj_unilevel");
        $this->load->model("customer_model","obj_customer");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        //GET CUSTOMER ACTUALLY
        $customer_id = $_SESSION['customer']['customer_id'];
        
        //GET REFERIDOS INFORMATION
        $params = array(
                        "select" =>"customer.customer_id,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.email,
                                    customer.kit_id,
                                    customer.phone,
                                    customer.created_at,
                                    customer.date_start,
                                    customer.active",
                        "where" => "unilevel.parend_id = $customer_id and unilevel.status_value = 1",
                        "join" => array('customer, customer.customer_id = unilevel.customer_id'),
                        "order" => "unilevel.unilevel_id DESC",
                        );
        $obj_referidos = $this->obj_unilevel->search($params);
        
        //GET PLAN INFORMATION
        $params = array("select" =>"count(*) as total_membership,
                                    (SELECT count(*) FROM unilevel JOIN customer ON customer.customer_id = unilevel.customer_id WHERE unilevel.parend_id = $customer_id and customer.kit_id = 0) as total_posicion,
                                    (SELECT count(*) FROM unilevel JOIN customer ON customer.customer_id = unilevel.customer_id WHERE unilevel.parend_id = $customer_id and customer.kit_id = 1) as total_pack_1,
                                    (SELECT count(*) FROM unilevel JOIN customer ON customer.customer_id = unilevel.customer_id WHERE unilevel.parend_id = $customer_id and customer.kit_id = 2) as total_pack_2
                                    ",
                        "where" => "unilevel.parend_id = $customer_id and customer.kit_id = 1 and customer.status_value = 1",
                                    "join" => array('customer, customer.customer_id = unilevel.customer_id')
                        );
        $obj_total = $this->obj_unilevel->get_search_row($params);
        //GET PRICE CURRENCY
        $this->tmp_backoffice->set("obj_referidos",$obj_referidos);
        $this->tmp_backoffice->set("obj_total",$obj_total);
        $this->tmp_backoffice->render("backoffice/b_referred");
    }
    
    public function unilevel()
    {
        //GET SESION ACTUALY
        $this->get_session();
        //GET CUSTOMER ACTUALLY
        $customer_id = $_SESSION['customer']['customer_id'];
        
        //GET DATA URL
        $url = explode("/",uri_string());
        
        if(isset($url[2])){
            $customer_id = decrypt($url[2]);
        }else{
            $customer_id = $_SESSION['customer']['customer_id'];
        }    
        
        
        //GET CUSTOMER PRINCIPAL
        $params = array(
                        "select" =>"customer_id,
                                    username,
                                    active_month,
                                    first_name,
                                    last_name,
                                    kit_id,
                                    range_id,
                                    active",
                        "where" => "customer_id = $customer_id and status_value = 1",
                        );
        $obj_customer = $this->obj_customer->get_search_row($params);
        
        //GET CUSTOMER N2
        $params_customer_n2 = array(
                        "select" =>"customer.customer_id,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.kit_id,
                                    customer.range_id,
                                    customer.active_month,
                                    customer.active",
                        "where" => "unilevel.parend_id = $obj_customer->customer_id and customer.status_value = 1",
                        "join" => array('unilevel, unilevel.customer_id = customer.customer_id'),
                        "order" => "unilevel.unilevel_id ASC"
                        );
         $obj_customer_n2 = $this->obj_customer->search($params_customer_n2);
         //TOTAL DIRECT
         $obj_total_direct = count($obj_customer_n2);
         $this->tmp_backoffice->set("obj_customer_n2",$obj_customer_n2);
         $this->tmp_backoffice->set("obj_total_direct",$obj_total_direct);
         
         
         //GET CUSTOMER BY PARENTS_ID 3 LEVEL
         if(count($obj_customer_n2) > 0){
             $customer_id_n2 = "";
                 foreach ($obj_customer_n2 as $key => $value) {
                        $customer_id_n2 .= $value->customer_id.",";
                 }
                 //DELETE LAST CARACTER ON STRING
                 $customer_id_n2 = substr ($customer_id_n2, 0, strlen($customer_id_n2) - 1);
                 if($customer_id_n2 != ""){
                     $params_customer_n3 = array(
                                    "select" =>"customer.customer_id,
                                                customer.username,
                                                customer.first_name,
                                                customer.last_name,
                                                customer.kit_id,
                                                customer.range_id,
                                                customer.active_month,
                                                unilevel.parend_id,
                                                customer.active",
                                "where" => "unilevel.parend_id in ($customer_id_n2) and customer.status_value = 1",
                                "join" => array('unilevel, unilevel.customer_id = customer.customer_id'),
                                "order" => "unilevel.unilevel_id ASC"
                                                );
                 $obj_customer_n3 = $this->obj_customer->search($params_customer_n3);
                 
                 $direct_3 = count($obj_customer_n3);
                 $this->tmp_backoffice->set("direct_3",$direct_3);
                 $this->tmp_backoffice->set("obj_customer_n3",$obj_customer_n3);
                 
                 
                 //GET CUSTOMER BY PARENTS_ID 4 LEVEL
                 if(count($obj_customer_n3) > 0){
                    $customer_id_n3 = "";
                    foreach ($obj_customer_n3 as $key => $value) {
                           $customer_id_n3 .= $value->customer_id.",";
                    }
                 //DELETE LAST CARACTER ON STRING
                 $customer_id_n3 = substr ($customer_id_n3, 0, strlen($customer_id_n3) - 1);
                    
                         $params_customer_n3 = array(
                                "select" =>"customer.customer_id,
                                            customer.username,
                                            customer.first_name,
                                            customer.active_month,
                                            customer.last_name,
                                            customer.kit_id,
                                            customer.range_id,
                                            unilevel.parend_id,
                                            customer.active
                                            ",
                                "where" => "unilevel.parend_id in ($customer_id_n3) and customer.status_value = 1",
                                "join" => array('unilevel, unilevel.customer_id = customer.customer_id'),
                                "order" => "unilevel.unilevel_id ASC"
                                                );
                            $obj_customer_n4 = $this->obj_customer->search($params_customer_n3);
                            $direct_4 = count($obj_customer_n4);
                            $this->tmp_backoffice->set("direct_4",$direct_4);
                            $this->tmp_backoffice->set("obj_customer_n4",$obj_customer_n4);   
                    }
                 
                 }
            }
        //GET TOTAL REFERRED
        $params = array(
                        "select" =>"unilevel_id",
                        "where" => "ident like '%$customer_id%'"
                        );
        $obj_total_referidos = $this->obj_unilevel->total_records($params);    
        
        //GET PRICE CURRENCY
        $this->tmp_backoffice->set("obj_total_referidos",$obj_total_referidos);
        $this->tmp_backoffice->set("obj_customer",$obj_customer);
        $this->tmp_backoffice->render("backoffice/b_unilevel");
    }
    
    public function binario()
    {
        //GET SESION ACTUALY
        $this->get_session();
        //GET DATA URL
        $url = explode("/",uri_string());
        
        if(isset($url[2])){
            $customer_id = decrypt($url[2]);
        }else{
            $customer_id = $_SESSION['customer']['customer_id'];
        }    
        
        //GET CUSTOMER PRINCIPAL
        $params = array(
                        "select" =>"customer.customer_id,
                                        customer.username,
                                        customer.created_at,
                                        unilevel.binaries_active,
                                        customer.first_name,
                                        customer.last_name,
                                        (select sum(point_left) from binarys where customer_id = $customer_id and status_value = 1) as point_left,
                                        (select sum(point_rigth) from binarys where customer_id = $customer_id and status_value = 1) as point_rigth,
                                        unilevel.point_calification_left,
                                        unilevel.point_calification_rigth,
                                        customer.active_month,
                                        customer.active,
                                        kit.kit_id as kit_id,
                                        kit.name as kit_name,
                                        unilevel.parend_id,
                                        unilevel.position,
                                        unilevel.ident",
                        "where" => "customer.customer_id = $customer_id and  customer.status_value = 1",
                            "join" => array('kit, customer.kit_id = kit.kit_id',
                                            'unilevel, customer.customer_id = unilevel.customer_id'));
             $obj_customer = $this->obj_customer->get_search_row($params);  
             $identificator = $obj_customer->ident;
             
             if($customer_id == 1){
                $str = "unilevel.ident like '%1z' or unilevel.ident like '%1d'";
             }else{
                $str = "unilevel.ident like '%$identificator' and unilevel.ident <> '$identificator'";
             }
             
             //SELECT ALL CUSTOMER IN THE TREE  
                    $param_tree = array(
                                "select" =>"customer.customer_id,
                                            customer.first_name,
                                            customer.last_name,
                                            customer.username,
                                            customer.active_month,
                                            unilevel.parend_id,
                                            unilevel.created_at,
                                            unilevel.position,
                                            unilevel.ident,
                                            kit.name as kit_name,
                                            kit.kit_id",
                                 "where" => "$str",
                                 "join" => array('kit, customer.kit_id = kit.kit_id',
                                            'unilevel, customer.customer_id = unilevel.customer_id'));
                    $obj_tree = $this->obj_customer->search($param_tree); 
             //SET POSITION
            $pierna = $obj_customer->position;        
                    
            if($customer_id == 1){
                if($pierna == 1){
                    $position_id1 = '1z';
                }else{
                    $position_id1 = '1d';
                }
                 //SEND TO $N1   
                $n1 = array($obj_customer->first_name,
                        $obj_customer->last_name,
                        $obj_customer->customer_id,
                        $obj_customer->created_at,
                        $obj_customer->position,
                        $obj_customer->username,
                        $position_id1, 
                        $obj_customer->kit_name,
                        $obj_customer->active_month);
                }else{
                   $n1 = array($obj_customer->first_name,
                        $obj_customer->last_name,
                        $obj_customer->customer_id,
                        $obj_customer->created_at,
                        $obj_customer->position,
                        $obj_customer->username,
                        $obj_customer->ident,
                        $obj_customer->kit_name,
                        $obj_customer->active_month
                        );             
            }
            
          foreach ($obj_tree as $key => $value) {
                $explo_ident =  explode(",", $n1[6]);
                //SELECT LAST IDENTIFICATOR FOR N2_Z
                $ultimo = intval($explo_ident[0]) + 1; 
                
                if($customer_id == 1){
                    $n2_z = '2z,1z';
                    $n2_d = '2d,1d';
                }else{
                    //SELECT LAST IDENTIFICATOR FOR N2_D
                    $n2_z = $ultimo."z,".$n1[6];
                    $n2_d = $ultimo."d,".$n1[6];
                }
                
                //SELECT LAST IDENTIFICATOR FOR N3_Z
                $ultimo = intval($n2_z) + 1; 
                $n3_z = $ultimo."z,".$n2_z;
                
                //SELECT LAST IDENTIFICATOR FOR N3_2z
                $ultimo = intval($n2_z) + 1; 
                $n3_2_z = $ultimo."d,".$n2_z;
                
                //SELECT LAST IDENTIFICATOR FOR N3_D
                $ultimo = intval($n2_d) + 1; 
                $n3_d = $ultimo."d,".$n2_d;
                
                //SELECT LAST IDENTIFICATOR FOR N3_2z
                $ultimo = intval($n2_d) + 1; 
                $n3_2_d = $ultimo."z,".$n2_d;
                
                
                //SELECT LAST IDENTIFICATOR FOR N4_Z
                $ultimo = intval($n3_z) + 1; 
                $n4_z = $ultimo."z,".$n3_z;
                
                //SELECT LAST IDENTIFICATOR FOR N4_2_Z
                $ultimo = intval($n3_z) + 1; 
                $n4_2_z = $ultimo."d,".$n3_z;
                
                
               //SELECT LAST IDENTIFICATOR FOR N4_3z
                $ultimo = intval($n3_2_z) + 1; 
                $n4_3_z = $ultimo."z,".$n3_2_z;
                
                //SELECT LAST IDENTIFICATOR FOR N4_4z
                $ultimo = intval($n3_2_z) + 1; 
                $n4_4_z = $ultimo."d,".$n3_2_z;
                
                //SELECT LAST IDENTIFICATOR FOR N4_D
                $ultimo = intval($n3_d) + 1; 
                $n4_d = $ultimo."d,".$n3_d;
                
                //SELECT LAST IDENTIFICATOR FOR N4_2_D
                $ultimo = intval($n3_d) + 1; 
                $n4_2_d = $ultimo."z,".$n3_d;
                
                //SELECT LAST IDENTIFICATOR FOR N4_3d
                $ultimo = intval($n3_2_d) + 1; 
                $n4_3_d = $ultimo."d,".$n3_2_d;
                
                //SELECT LAST IDENTIFICATOR FOR N4_4d
                $ultimo = intval($n3_2_d) + 1; 
                $n4_4_d = $ultimo."z,".$n3_2_d;
                
                //SELECT LAST IDENTIFICATOR FOR N5_Z
                $ultimo = intval($n4_z) + 1; 
                $n5_z = $ultimo."z,".$n4_z;
                
                //SELECT LAST IDENTIFICATOR FOR N5_2_Z
                $ultimo = intval($n4_z) + 1; 
                $n5_2_z = $ultimo."d,".$n4_z;
                
                //SELECT LAST IDENTIFICATOR FOR N5_3z
                $ultimo = intval($n4_2_z) + 1; 
                $n5_3_z = $ultimo."z,".$n4_2_z;
                
                //SELECT LAST IDENTIFICATOR FOR N5_4z
                $ultimo = intval($n4_2_z) + 1; 
                $n5_4_z = $ultimo."d,".$n4_2_z;
                
                //SELECT LAST IDENTIFICATOR FOR N5_5z
                $ultimo = intval($n4_3_z) + 1; 
                $n5_5_z = $ultimo."z,".$n4_3_z;
                
                //SELECT LAST IDENTIFICATOR FOR N5_6z
                $ultimo = intval($n4_3_z) + 1; 
                $n5_6_z = $ultimo."d,".$n4_3_z;
                
                //SELECT LAST IDENTIFICATOR FOR N5_7z
                $ultimo = intval($n4_4_z) + 1; 
                $n5_7_z = $ultimo."z,".$n4_4_z;
                
                //SELECT LAST IDENTIFICATOR FOR N5_8z
                $ultimo = intval($n4_4_z) + 1; 
                $n5_8_z = $ultimo."d,".$n4_4_z;
                
                //SELECT LAST IDENTIFICATOR FOR N5_Z
                $ultimo = intval($n4_d) + 1; 
                $n5_d = $ultimo."d,".$n4_d;
                
                //SELECT LAST IDENTIFICATOR FOR N5_2_Z
                $ultimo = intval($n4_d) + 1; 
                $n5_2_d = $ultimo."z,".$n4_d;
                
                //SELECT LAST IDENTIFICATOR FOR N5_3z
                $ultimo = intval($n4_2_d) + 1; 
                $n5_3_d = $ultimo."d,".$n4_2_d;
                
                //SELECT LAST IDENTIFICATOR FOR N5_4z
                $ultimo = intval($n4_2_d) + 1; 
                $n5_4_d = $ultimo."z,".$n4_2_d;
                
                //SELECT LAST IDENTIFICATOR FOR N5_5z
                $ultimo = intval($n4_3_d) + 1; 
                $n5_5_d = $ultimo."d,".$n4_3_d;
                
                //SELECT LAST IDENTIFICATOR FOR N5_6z
                $ultimo = intval($n4_3_d) + 1; 
                $n5_6_d = $ultimo."z,".$n4_3_d;
                
                //SELECT LAST IDENTIFICATOR FOR N5_7z
                $ultimo = intval($n4_4_d) + 1; 
                $n5_7_d = $ultimo."d,".$n4_4_d;
                
                //SELECT LAST IDENTIFICATOR FOR N5_8z
                $ultimo = intval($n4_4_d) + 1; 
                $n5_8_d = $ultimo."z,".$n4_4_d;
                
                if($value->ident == $n2_z){
                    $n2_iz = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,
                                               );
                    $this->tmp_backoffice->set("n2_iz",$n2_iz);
                }
                elseif($value->ident == $n2_d){
                    $n2_de = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n2_de",$n2_de);
                }
                elseif($value->ident == $n3_2_z){
                    $n3_2_iz = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n3_2_iz",$n3_2_iz);
                }
                elseif($value->ident == $n3_z){
                    $n3_iz = array($value->first_name,
                                              $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n3_iz",$n3_iz);
                }
                elseif($value->ident == $n3_d){
                    $n3_de = array($value->first_name,
                                              $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n3_de",$n3_de);
                }
                elseif($value->ident == $n3_2_d){
                    $n3_2_de = array($value->first_name,
                                              $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n3_2_de",$n3_2_de);
                }
                elseif($value->ident == $n4_z){
                    $n4_iz = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n4_iz",$n4_iz);
                }
                elseif($value->ident == $n4_2_z){
                    $n4_2_iz = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n4_2_iz",$n4_2_iz);
                }
                elseif($value->ident == $n4_3_z){
                    $n4_3_iz = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n4_3_iz",$n4_3_iz);
                }
                elseif($value->ident == $n4_4_z){
                    $n4_4_iz = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n4_4_iz",$n4_4_iz);
                }
                elseif($value->ident == $n4_d){
                    $n4_de = array($value->first_name,
                                              $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n4_de",$n4_de);
                }
                elseif($value->ident == $n4_2_d){
                    $n4_2_de = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n4_2_de",$n4_2_de);
                }
                elseif($value->ident == $n4_3_d){
                    $n4_3_de = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n4_3_de",$n4_3_de);
                }
                elseif($value->ident == $n4_4_d){
                    $n4_4_de = array($value->first_name,
                                              $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n4_4_de",$n4_4_de);
                }
                elseif($value->ident == $n5_z){
                    $n5_iz = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_iz",$n5_iz);
                }
                elseif($value->ident == $n5_2_z){
                    $n5_2_iz = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_2_iz",$n5_2_iz);
                }
                elseif($value->ident == $n5_3_z){
                    $n5_3_iz = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_3_iz",$n5_3_iz);
                }
                elseif($value->ident == $n5_4_z){
                    $n5_4_iz = array($value->first_name,
                                              $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_4_iz",$n5_4_iz);
                }
                elseif($value->ident == $n5_5_z){
                    $n5_5_iz = array($value->first_name,
                                              $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_5_iz",$n5_5_iz);
                }
                elseif($value->ident == $n5_6_z){
                    $n5_6_iz = array($value->first_name,
                                              $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_6_iz",$n5_6_iz);
                }
                elseif($value->ident == $n5_7_z){
                    $n5_7_iz = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_7_iz",$n5_7_iz);
                }
                elseif($value->ident == $n5_8_z){
                    $n5_8_iz = array($value->first_name,
                                              $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_8_iz",$n5_8_iz);
                }
                elseif($value->ident == $n5_d){
                    $n5_de = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_de",$n5_de);
                }
                elseif($value->ident == $n5_2_d){
                    $n5_2_de = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_2_de",$n5_2_de);
                }
                elseif($value->ident == $n5_3_d){
                    $n5_3_de = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_3_de",$n5_3_de);
                }
                elseif($value->ident == $n5_4_d){
                    $n5_4_de = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_4_de",$n5_4_de);
                }
                elseif($value->ident == $n5_5_d){
                    $n5_5_de = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_5_de",$n5_5_de);
                }
                elseif($value->ident == $n5_6_d){
                    $n5_6_de = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_6_de",$n5_6_de);
                }
                elseif($value->ident == $n5_7_d){
                    $n5_7_de = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_7_de",$n5_7_de);
                }
                elseif($value->ident == $n5_8_d){
                    $n5_8_de = array($value->first_name,
                                               $value->last_name,
                                               encrypt($value->customer_id),
                                               $value->created_at,
                                               $value->parend_id,
                                               $value->position,
                                               $value->username,
                                               $value->active_month,
                                               $value->kit_name,
                                               $value->kit_id,);
                    $this->tmp_backoffice->set("n5_8_de",$n5_8_de);
                }
            }   
         
        $params = array(
                        "select" =>"count(*) as total_left",
                        "where" => "ident like '%$n2_z'"
                        );
        $obj_total_binary = $this->obj_unilevel->get_search_row($params);
        $total_left = $obj_total_binary->total_left;
        
        $params = array(
                        "select" =>"count(*) as total_right",
                        "where" => "ident like '%$n2_d'"
                        );
        $obj_total_binary = $this->obj_unilevel->get_search_row($params);
        $total_right = $obj_total_binary->total_right;
        
        //GET PRICE CURRENCY
        $this->tmp_backoffice->set("total_right",$total_right);
        $this->tmp_backoffice->set("total_left",$total_left);
        $this->tmp_backoffice->set("obj_customer",$obj_customer);
        $this->tmp_backoffice->render("backoffice/b_binario");
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


    
