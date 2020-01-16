<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("videos_model","obj_videos");
        $this->load->model("category_model","obj_category");
    }

	public function index()
	{   
            //GET NAV
            $data['obj_category_videos'] = $this->nav_videos();
            
            if(isset($_GET['search'])){
                $search = $_GET['search'];
                $where = "videos.name like '%$search%' and videos.active = 1";
            }else{
                $where = "videos.active = 1";
            }
             
            $params = array(
                        "select" =>"videos.video_id,
                                    videos.summary,
                                    videos.type,
                                    videos.name,
                                    videos.slug,
                                    videos.img,
                                    videos.date,
                                    videos.active,
                                    category.category_id,
                                    category.slug as category_slug,
                                    videos.date",
                "join" => array( 'category, category.category_id = videos.category_id'),
                "where" => $where,
                "order" => "videos.video_id DESC");
            
                
             /// PAGINADO
            $config=array();
            $config["base_url"] = site_url("courses"); 
            $config["total_rows"] = $this->obj_videos->total_records($params);  
            $config["per_page"] = 12; 
            $config["num_links"] = 1;
            $config["uri_segment"] = 2;   
            
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';            
            $config['num_tag_open']='<li>';
            $config['num_tag_close'] = '</li>';            
            $config['cur_tag_open']= '<li class="active"><span aria-current="page" class="page-numbers current">';
            $config['cur_tag_close']= '</span></li>';            
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';            
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            
            $this->pagination->initialize($config);        
            $data['obj_pagination'] = $this->pagination->create_links();
            
            /// DATA
            $data['obj_videos_all'] = $this->obj_videos->search_data($params, $config["per_page"],$this->uri->segment(2));
            //send total row
            $data['total'] = $config["total_rows"];
            $this->load->view('courses',$data);
	}
        
        public function category($category)
	{
            //GET NAV
            $data['obj_category_videos'] = $this->nav_videos();
            
            //get data catalog
            $params_categogory_id = array(
                        "select" =>"category_id",
                "where" => "slug like '%$category%'");
            $obj_category = $this->obj_category->get_search_row($params_categogory_id);
            $category_id = $obj_category->category_id;
            
            if(isset($_GET['search'])){
                $search = $_GET['search'];
                $where = "videos.name like '%$search%' and category.type = 1 and videos.active = 1";
            }else{
                $where = "videos.category_id = $category_id and category.type = 1 and videos.active = 1";
            }
            
             //get catalog
            $params = array(
                        "select" =>"videos.video_id,
                                    videos.summary,
                                    videos.type,
                                    videos.name,
                                    videos.slug,
                                    videos.img,
                                    videos.date,
                                    videos.active,
                                    category.slug as category_slug,
                                    videos.date",
                "join" => array( 'category, category.category_id = videos.category_id'),
                "where" => $where);
            
             /// PAGINADO
            $config=array();
            $config["base_url"] = site_url("courses"); 
            $config["total_rows"] = $this->obj_videos->total_records($params);  
            $config["per_page"] = 12; 
            $config["num_links"] = 1;
            $config["uri_segment"] = 2;   
            
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';            
            $config['num_tag_open']='<li>';
            $config['num_tag_close'] = '</li>';            
            $config['cur_tag_open']= '<li class="active"><span aria-current="page" class="page-numbers current">';
            $config['cur_tag_close']= '</span></li>';            
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';            
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            
            $this->pagination->initialize($config);        
            $data['obj_pagination'] = $this->pagination->create_links();
            /// DATA
            $data['obj_videos_all'] = $this->obj_videos->search_data($params, $config["per_page"],$this->uri->segment(2));
            //send total row
            $data['total'] = $config["total_rows"];
           
            //SEND DATA
            $this->load->view('courses',$data);
	}
        public function detail($slug)
	{   
            
            $data['obj_category_videos'] = $this->nav_videos();
             //get data catalog
            $params_categogory_id = array(
                        "select" =>"category_id",
                "where" => "slug like '%$slug%'");
            $obj_category = $this->obj_category->get_search_row($params_categogory_id);
            $category_id = $obj_category->category_id;
            
            $url = explode("/",uri_string());
            $slug_2 = $url[2];
            
            //get catalog
             //get catalog
            $params = array(
                        "select" =>"videos.video_id,
                                    videos.summary,
                                    videos.type,
                                    videos.name,
                                    videos.slug,
                                    videos.video,
                                    videos.description,
                                    videos.img2,
                                    videos.date,
                                    videos.active,
                                    category.name as category_name,
                                    category.slug as category_slug,
                                    videos.date",
                "join" => array( 'category, category.category_id = videos.category_id'),
                "where" => "videos.slug = '$slug_2' and videos.category_id = $category_id and videos.active = 1");
            $data['obj_video'] = $this->obj_videos->get_search_row($params);
            
            
            //get rand course
            $params = array(
                        "select" =>"videos.video_id,
                                    videos.summary,
                                    videos.type,
                                    videos.name,
                                    videos.slug,
                                    videos.img,
                                    videos.date,
                                    videos.active,
                                    category.slug as category_slug,
                                    videos.date",
                "join" => array( 'category, category.category_id = videos.category_id'),
                "where" => "videos.category_id = $category_id and videos.active = 1",
                "order" => "rand()",
                "limit" => "3");
            $data['obj_videos_rand'] = $this->obj_videos->search($params);
            
            //SEND DATA
            $this->load->view('courses_detail',$data);
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
