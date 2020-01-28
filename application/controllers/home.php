<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
     public function __construct(){
        parent::__construct();
        $this->load->model("comments_model","obj_comments");
        $this->load->model("customer_model","obj_customer");
        $this->load->model("paises_model","obj_paises");
        $this->load->model("category_model","obj_category");
        $this->load->model("otros_model","obj_otros");
    }   

        public function index(){
             //get data nav courses category
            $data['obj_category_videos'] = $this->nav_videos();
            
            //GET LINK VIDEO HOME FROM OTROS TABLE
            $params = array("select" =>"valor",
                            "where" => "otros_id = 1 and status_value = 1",
                                        );
            $data['video_home'] = $this->obj_otros->get_search_row($params);
        $this->load->view('home',$data);
	}
        
        public function term(){
             //get data nav courses category
            $data['obj_category_videos'] = $this->nav_videos();
            $this->load->view('term',$data);
	}
        
        public function policy(){
             //get data nav courses category
            $data['obj_category_videos'] = $this->nav_videos();
            $this->load->view('policy-cookies',$data);
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
        
        public function error(){
            $this->load->view('errors/html/error_404');
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