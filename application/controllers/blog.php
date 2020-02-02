<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
     public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("blog_model","obj_blog");
        $this->load->model("category_model","obj_category");
    }   

        public function index(){
             //get data nav courses category
            $data['obj_category_videos'] = $this->nav_videos();
            
            //GET ALL POST BLOG
            $params = array("select" =>"blog.title,
                                        blog.date,
                                        blog.slug,
                                        blog.img,
                                        blog.date,
                                        blog.content,
                                        category.name as category_name,
                                        category.slug as category_slug,
                                        blog.blog_id",
                            "where" => "blog.active = 1  and blog.status_value = 1",
                            "join" => array('category, blog.category_id = category.category_id'),
                            "order" => "blog.blog_id DESC",);
            
             /// PAGINADO
            $config=array();
            $config["base_url"] = site_url("blog"); 
            $config["total_rows"] = $this->obj_blog->total_records($params);  
            $config["per_page"] = 16; 
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
            $data['obj_blog'] = $this->obj_blog->search_data($params, $config["per_page"],$this->uri->segment(2));
            
            //SEND DATA TITLE
            $data['title'] = "Blog";
            $this->load->view('blog',$data);
	}
        
        public function category($category){
            
            $params_categogory_id = array(
                        "select" =>"category_id, name",
                "where" => "slug like '%$category%' and category.type = 2");
            $obj_category = $this->obj_category->get_search_row($params_categogory_id);
            $category_id = $obj_category->category_id;
            
             //get data nav courses category
            $data['obj_category_videos'] = $this->nav_videos();
            //GET ALL POST BLOg BY CATEGORY
            $params = array("select" =>"blog.title,
                                        blog.date,
                                        blog.slug,
                                        blog.img,
                                        blog.date,
                                        blog.content,
                                        category.name as category_name,
                                        category.slug as category_slug,
                                        blog.blog_id",
                            "where" => "blog.category_id = $category_id  and blog.active = 1 and blog.status_value = 1",
                            "join" => array('category, blog.category_id = category.category_id'),
                            "order" => "blog.blog_id DESC",);
              /// PAGINADO
            $config=array();
            $config["base_url"] = site_url("blog/$category"); 
            $config["total_rows"] = $this->obj_blog->total_records($params);  
            $config["per_page"] = 16; 
            $config["num_links"] = 1;
            $config["uri_segment"] = 3;   
            
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
            $data['obj_blog'] = $this->obj_blog->search_data($params, $config["per_page"],$this->uri->segment(3));
            
            
            //SEND DATA TITLE
            $data['title'] = "Blog | ". $obj_category->name;
            $this->load->view('blog',$data);
	}
        
        public function detail($slug){
             //get data nav courses category
            $data['obj_category_videos'] = $this->nav_videos();
            
             //get data catalog
            $params_categogory_id = array(
                        "select" =>"category_id,name",
                "where" => "slug like '%$slug%' and category.type = 2");
            $obj_category = $this->obj_category->get_search_row($params_categogory_id);
            $category_id = $obj_category->category_id;
            
            $url = explode("/",uri_string());
            $slug_2 = $url[2];
            
            //GET DATA BLOG 
            $params = array("select" =>"blog.title,
                                        blog.date,
                                        blog.slug,
                                        blog.img,
                                        blog.img_2,
                                        blog.date,
                                        blog.content,
                                        category.name as category_name,
                                        category.slug as category_slug,
                                        blog.blog_id",
                            "where" => "blog.slug = '$slug_2' and blog.category_id = $category_id  and blog.active = 1 and blog.status_value = 1",
                            "join" => array('category, blog.category_id = category.category_id'),
                            "order" => "blog.blog_id DESC",);
            $data['obj_blog'] = $this->obj_blog->get_search_row($params);
            $title_blog = $data['obj_blog']->title;
            
            
             //get rand blog
            $params = array(
                        "select" =>"blog.title,
                                    blog.date,
                                    blog.slug,
                                    blog.img,
                                    blog.date,
                                    blog.content,
                                    category.name as category_name,
                                    category.slug as category_slug,
                                    blog.blog_id",
                        "where" => "blog.category_id = $category_id and blog.active = 1 and blog.status_value = 1",
                        "join" => array('category, blog.category_id = category.category_id'),
                "order" => "rand()",
                "limit" => "6");
            $data['obj_blog_rand'] = $this->obj_blog->search($params);
            
            //SEND DATA TITLE
            $data['title'] = "Blog | ". $obj_category->name." | ".$title_blog;
            $this->load->view('blog_detail',$data);
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