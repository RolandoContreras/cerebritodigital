<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
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
            //SEND DATA TITLE
            $data['title'] = "Blog";
        $this->load->view('blog',$data);
	}
        
        public function detail(){
             //get data nav courses category
            $data['obj_category_videos'] = $this->nav_videos();
            //SEND DATA TITLE
            $data['title'] = "Blog | Las Criptomonedas";
            $this->load->view('detail_blog',$data);
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