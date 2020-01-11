<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
     public function __construct(){
        parent::__construct();
        $this->load->model("comments_model","obj_comments");
        $this->load->model("customer_model","obj_customer");
    }   

        public function index(){
		$this->load->view('home');
	}
        
        public function send_messages(){
		if($this->input->is_ajax_request()){   
                $name = $this->input->post("name");
                $email = $this->input->post("email");
                $phone = $this->input->post("phone");
                $message = $this->input->post("message");
                
                //SAVE MESSAGES BD
                //status_value 0 means (not read)
                        $data = array(
                            'name' => $name,
                            'email' => $email,
                            'phone' => $phone,
                            'message' => $message,
                            'date_comment' => date("Y-m-d H:i:s"),
                            'active' => 1,
                            'status_value' => 1,
                        );
                        $this->obj_comments->insert($data);
                $data['message'] = true;
                echo json_encode($data);            
                exit();
            }
	}
        
        
        
        
}