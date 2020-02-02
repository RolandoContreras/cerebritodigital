<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_blog extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("category_model","obj_category");
        $this->load->model("blog_model","obj_blog");
    }   
                
    public function index(){  
        
           $this->get_session();
           //GET ALL BLOG
           $params = array(
                        "select" =>"blog.blog_id,
                                    blog.title,
                                    blog.date,
                                    blog.img,
                                    blog.active,
                                    blog.date,
                                    category.name as category_name",
                "where" => "blog.status_value = 1",
                "join" => array('category, blog.category_id = category.category_id'));
           //GET DATA FROM CUSTOMER
        $obj_blog = $this->obj_blog->search($params);
            
        /// VISTA
        $this->tmp_mastercms->set("obj_blog",$obj_blog);
        $this->tmp_mastercms->render("dashboard/blog/blog_list");
    }
    
    public function load($blog_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        
        if ($blog_id != ""){
            /// PARAM FOR SELECT 
            $where = "blog_id = $blog_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_blog  = $this->obj_blog->get_search_row($params); 
            
            //RENDER
            $this->tmp_mastercms->set("obj_blog",$obj_blog);
          }
          
         $params = array(
                        "select" =>"category_id,
                                    name",
                "where" => "type = 2 and active = 1",
            );
            //GET DATA COMMENTS
            $obj_category= $this->obj_category->search($params);
            $this->tmp_mastercms->set("obj_category",$obj_category);
            $this->tmp_mastercms->render("dashboard/blog/blog_form");    
    }
    
    public function validate(){
        
        //GET CUSTOMER_ID
        $blog_id = $this->input->post("blog_id");
        $title = $this->input->post("title");
        $slug = convert_slug($title);
        $category_id = $this->input->post('category_id');
        $content =  $this->input->post('content');
        $img_2 = $this->input->post("img_2");
        $img_3 = $this->input->post("img_3");
        $active =  $this->input->post('active');
        
        if(isset($_FILES["image_file"]["name"])){
                $config['upload_path']          = './static/cms/img/blog/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 3000;
                $this->load->library('upload', $config);
                    if ( ! $this->upload->do_upload('image_file')){
                         $error = array('error' => $this->upload->display_errors());
                          echo '<div class="alert alert-danger">'.$error['error'].'</div>';
                    }else{
                        $data = array('upload_data' => $this->upload->data());
                    }
                $img = $_FILES["image_file"]["name"];        
                 if($img == ""){
                     $img = $img_2;
                 }   
            }
            
          if(isset($_FILES["image_file2"]["name"])){
                $config['upload_path']          = './static/cms/img/blog/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 3000;
                $this->load->library('upload', $config);
                    if ( ! $this->upload->do_upload('image_file2')){
                         $error = array('error' => $this->upload->display_errors());
                          echo '<div class="alert alert-danger">'.$error['error'].'</div>';
                    }else{
                        $data = array('upload_data' => $this->upload->data());
                    }
                $img2 = $_FILES["image_file2"]["name"];        
                 if($img2 == ""){
                     $img2 = $img_3;
                 }   
            }
        
        if($blog_id != ""){
             $data = array(
                'title' => $title,
                'slug' => $slug, 
                'content' => $content,
                'category_id' => $category_id,
                'img' => $img,
                'img_2' => $img2,
                'date' => date("Y-m-d"),  
                'active' => $active,  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
             $this->obj_blog->update($blog_id, $data);
        }else{
            $data = array(
                'title' => $title,
                'slug' => $slug, 
                'content' => $content,
                'category_id' => $category_id,
                'img' => $img,
                'img_2' => $img2,
                'date' => date("Y-m-d"),  
                'active' => $active,  
                'status_value' => 1,
                );          
             $this->obj_blog->insert($data);        
            //SAVE DATA IN TABLE    
        }    
        redirect(site_url()."dashboard/blog");
    }
        
    public function get_session(){          
        if (isset($_SESSION['usercms'])){
            if($_SESSION['usercms']['logged_usercms']=="TRUE" && $_SESSION['usercms']['status']==1){               
                return true;
            }else{
                redirect(site_url().'dashboard');
            }
        }else{
            redirect(site_url().'dashboard');
        }
    }
}
?>