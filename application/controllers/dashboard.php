<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();     
        $this->load->model('users_model','obj_user');
    }
    
    public function index(){    
       $this->load->view('dashboard');
    }
    
    public function validate(){
        if($this->input->is_ajax_request()){    
            $email = $this->input->post('email');  	 
            $password = $this->input->post('password');  
            $params = array("select" =>"user_id,
                                        first_name,
                                        last_name,
                                        email,
                                        privilage,
                                        status_value",
                                 "where" => "email = '$email' and password = '$password' and active = 1");
                $obj_user_count = $this->obj_user->total_records($params);
                $obj_user = $this->obj_user->get_search_row($params);
                

            if ($obj_user_count > 0){
                    $data_user_session['user_id'] = $obj_user->user_id;
                    $data_user_session['name'] = $obj_user->first_name.' '.$obj_user->last_name;
                    $data_user_session['email'] = $obj_user->email;
                    $data_user_session['privilage'] = $obj_user->privilage;
                    $data_user_session['logged_usercms'] = "TRUE";
                    $data_user_session['status'] = $obj_user->status_value;
                    $_SESSION['usercms'] = $data_user_session;      
                    
                    $data['message'] = "true";
                    $data['print'] = "Bienvenido al sistema";
                    $data['url'] = site_url()."dashboard/panel"; 
            }else{
                $data['print'] = "El correo y/o la contraseña no son correctas";
                $data['message'] = "false";    
            }
            echo json_encode($data);  
            exit();           
        }
    }
    
    public function validar_user($email){
        
        $password = $this->input->post('password');  
       
    }
    
    public function logout(){        
        $this->session->unset_userdata('usercms');
	$this->session->destroy();
        redirect('dashboard'); 
    }
}