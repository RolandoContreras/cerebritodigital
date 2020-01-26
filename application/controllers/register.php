<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("paises_model","obj_paises");
        $this->load->model("unilevel_model","obj_unilevel");
        $this->load->model("category_model","obj_category");
    }

	public function index()
	{
            //get data nav courses category
            $data['obj_category_videos'] = $this->nav_videos();
            
            $url = explode("/", uri_string());
            if (isset($url[1])) {
                $username = $url[1];
                //Select params
                $params = array(
                   "select" => "customer.customer_id,
                                customer.first_name,
                                unilevel.position_temporal,
                                customer.last_name,
                                customer.username,
                                unilevel.ident",
                    "join" => array( 'unilevel, unilevel.customer_id = customer.customer_id'),
                    "where" => "username = '$username'",
                    );
                $data['obj_customer'] = $this->obj_customer->get_search_row($params);
            }
            $data['obj_paises'] = $this->list_pais();
	    $this->load->view('register',$data);
	}
        public function validate_username() {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
            $username = str_to_minuscula(trim($this->input->post('username')));
            $param_customer = array(
                "select" => "customer_id",
                "where" => "username = '$username'");
            $customer = $this->obj_customer->total_records($param_customer);
            if ($customer > 0) {
                $data['message'] = "true";
                $data['print'] = "Usuario no esta disponible!";
            } else {
                $data['message'] = "false";
                $data['print'] = "Usuario Disponible!";
            }
            echo json_encode($data);
            }
        }
        
        public function validate()
	{
            if ($this->input->is_ajax_request()) {
            //SET TIMEZONE AMERICA
            date_default_timezone_set('America/Lima');
            //get data
            $user = str_to_minuscula($this->input->post("user"));
            //VALIDATE USERNAME
            $result = $this->validate_username_register($user);
            
            if($result == 1){
                $data['status'] = "username";
            }else{
                $first_name = $this->input->post("first_name");
                $last_name = $this->input->post("last_name");
                $email = $this->input->post("email");
                $dni = $this->input->post("dni");
                $phone = $this->input->post("phone");
                $pass = $this->input->post("pass");
                $country = $this->input->post("country");
                $parent_id = $this->input->post("parent_id");
                $position_temporal = $this->input->post("position_temporal");
                $ident = $this->input->post("ident");
                
                //INSERT TABLE CUSTOMER
                $data = array(
                        'first_name' => $first_name,
                        'last_name' => $last_name,
                        'kit_id' => 0,
                        'range_id' => 0,
                        'username' => $user,
                        'email' => $email,
                        'password' => $pass,
                        'phone' => $phone,
                        'active_month' => 0,
                        'dni' => $dni,
                        'country' => $country,
                        'active' => 0,
                        'status_value' => 1,
                        'created_at' => date("Y-m-d H:i:s"),
                    );
                    $customer_id = $this->obj_customer->insert($data);
                    
                //CREATE UNILEVEL
                    
                    //code from company
                    if($parent_id == 1){
                        if($position_temporal == 1){
                            $new_ident = "1z";
                            $last_id = 'z';
                        }else{
                            $new_ident = "1d";
                            $last_id = 'z';
                        }
                    }else{
                        $new_ident = $ident;
                    }
                    
                    if ($position_temporal == 1) {
                            $last_id = 'z';
                    }else{
                            $last_id = 'd';
                    }
                    
                    //get data all unilevel where like ident
                    $params = array(
                       "select" => "ident",
                       "where" => "ident like '%$new_ident'",
                        "order" => "unilevel_id ASC",
                        );
                    $obj_identificator = $this->obj_unilevel->search($params);
                    
                    //SELECT NEW IDENTIFICATOR
                    $identificador_explo = explode(',', $new_ident);
                    $last_number = intval(preg_replace('/[^0-9]+/', '', $identificador_explo[0]), 10); 
                    $last_number = $last_number + 1;
                    $new_identification = $last_number.$last_id.",".$new_ident;
                    
                    if($obj_identificator != ""){
                        foreach ($obj_identificator as $key => $value){
                            if($value->ident == "$new_identification"){
                                //VERIDY NEW IDENTIFICATOR
                                $new_identification_param = explode(',', $value->ident);
                                $last_number = intval(preg_replace('/[^0-9]+/', '', $new_identification_param[0]), 10); 
                                $last_number = $last_number + 1;
                                $new_identification = $last_number.$last_id.",".$new_identification;
                                
                            }
                        }
                    }
                    
                $data_unilevel = array(
                        'customer_id' => $customer_id,
                        'parend_id' => $parent_id,
                        'ident' => $new_identification,
                        'position' => $position_temporal,
                        'point_calification_left' => 0,
                        'point_calification_rigth' => 0,
                        'binaries_active' => 0,
                        'position_temporal' => 1,
                        'status_value' => 1,
                        'created_at' => date("Y-m-d H:i:s"),
                        'created_by' => $customer_id,
                    );
                    $this->obj_unilevel->insert($data_unilevel);
                    $data['status'] = "true";
            }
            //CREAR NUEVA SECION 
            $data_customer_session['customer_id'] = $customer_id;
            $data_customer_session['name'] = $first_name.' '.$last_name;
            $data_customer_session['username'] = $user;
            $data_customer_session['active_month'] = 0;
            $data_customer_session['email'] = $email;
            $data_customer_session['kit_id'] = 0;
            $data_customer_session['active'] = 0;
            $data_customer_session['logged_customer'] = "TRUE";
            $data_customer_session['status'] = 1;
            $_SESSION['customer'] = $data_customer_session; 
            $data['status'] = "success";
            $this->message($user, $pass, $first_name, $email);
            echo json_encode($data);
            }
	}
        
        public function message($username, $pass, $name, $email){    
                $mensaje = wordwrap("<html>
                    
 <div bgcolor='#E9E9E9' style='background:#fff;margin:0;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
  <table style='background-color:#fff;border-collapse:collapse;margin:0;padding:0' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0'
    align='center'>
    <tbody>
      <tr>
        <td valign='top' align='center'>
          <table style='border-collapse:collapse;margin:0;padding:0;max-width:600px' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
            <tbody>
              <tr>
                <td style='padding:0 30px;display:block;background:#fafafa'>
                  <p style='padding:32px 32px 0;color:#333333;background:#fff;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;line-height:14px;margin:0;font-size:14px;border-radius:5px 5px 0 0'
                    align='left'>Hola $name,</p>
                </td>
              </tr>
              <tr>
                <td style='padding:0 30px;display:block;background:#fafafa'>
                  <table style='width:100%;border-collapse:collapse;padding:0' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
                    <tbody>
                      <tr>
                        <td style='padding:0;background-color:#fff;border-radius:0 0 5px 5px;padding:32px'>
                          <p style='margin:0;padding-bottom:20px;color:#333333;line-height:22px;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                          Tu cuenta ha sido creada exitosamente accede a tu oficina virtual a través del siguiente enlace  <a href='https://cerebritodigitalperu.com/' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://cerebritodigitalperu.com&amp;source=gmail&amp;ust=1575431368630000&amp;usg=AFQjCNE2bxZM6aRU9Ckhj6hvz9ZXHzwzyA'>cerebritodigitalperu.com</a> <br/>Encuentra aquí tus credenciales de ingreso. </p>
                          <p style='margin:0 0 24px;padding:16px;border-radius:5px;padding-bottom:20px;background:#f7f7f7;color:#333333;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                          <span style='display:block;padding-bottom:8px'><span style='width:101px;display:inline-block'>Usuario: </span><strong>$username</strong></span>
                            <span style='display:block'><span style='width:101px;display:inline-block'>Contraseña: </span><strong>$pass</strong></span>
                          </p> 
                          <a href='https://cerebritodigitalperu.com/' style='background:#2d6ced;color:#ffffff;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px;display:inline-block;padding:12px 17px;text-decoration:none;border-radius:5px'
                            target='_blank'>Iniciar Sesión</a>                          
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td style='padding:30px 30px 0;display:block;background:#fafafa'>
                  <table style='width:100%;border-collapse:collapse;padding:0;text-align:center' width='100%' height='100%' cellspacing='0' cellpadding='0'
                    border='0' align='center'>
                    <tbody>
                      <tr>
                        <td style='max-width:290px;display:inline-block;padding:0 19px 30px;box-sizing:border-box;text-align:left'>
                          <p style='margin:0;text-align:center;line-height:20px;color:#888888;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:12px'>
                          Visítanos en  <a href='https://cerebritodigitalperu.com/' style='color:#2d6ced;text-decoration:none' target='_blank'>www.cerebritodigitalperu.com</a></p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
  </div>
                            .</html>", 70, "\n", true);
                    $titulo = "Bienvenido - [CEREBRITO DIGITAL]";
                    $headers = "MIME-Version: 1.0\r\n"; 
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    $headers .= "From: CEREBRITO DIGITAL <cerebritodigitalperu.com>\r\n";
                    $bool = mail("$email",$titulo,$mensaje,$headers);
                    
    }
    
        public function validate_username_register($username) {
                //SELECT ID FROM CUSTOMER
            $param_customer = array(
                "select" => "customer_id",
                "where" => "username = '$username'");
            $customer = $this->obj_customer->total_records($param_customer);
            if ($customer > 0) {
                return 1;
            } else {
                return 0;
            }
        }
        
        public function list_pais() {
            //Select params
            $params = array(
                "select" => "id, nombre",
                "where" => "id_idioma = 7");
            $obj_paises = $this->obj_paises->search($params);
            return $obj_paises;
        }
        
        public function nav_videos(){
            $params_category_videos = array(
                        "select" =>"category_id,
                                    slug,
                                    name",
                "where" => "type = 1 and active = 1",
            );
            //GET DATA COMMENTS
            return $obj_category_videos = $this->obj_category->search($params_category_videos);
        }
}
