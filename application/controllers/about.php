<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("category_model","obj_category");
    }
    
	public function index()
	{
            //get data nav courses category
            $data['obj_category_videos'] = $this->nav_videos();
            //SEND DATA TITLE
            $data['title'] = "Acerca";
            $this->load->view('about',$data);
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
