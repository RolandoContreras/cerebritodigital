<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("videos_model","obj_videos");
        $this->load->model("category_model","obj_category");
    }
	public function index()
	{
            //get data nav courses category
             $params_category_videos = array(
                        "select" =>"category_id,
                                    slug,
                                    created_at,
                                    name",
                "where" => "type = 1 and active = 1",
            );
            //GET DATA COMMENTS
            $obj_category_videos = $this->obj_category->search($params_category_videos);
            
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
                "where" => "videos.active = 1",
                "order" => "videos.video_id DESC");
            $obj_video = $this->obj_videos->search($params);  
            
            
            $codigo='<?xml version="1.0" encoding="UTF-8"?>
                <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
            foreach ($obj_video as $value) {
                $codigo .='<url>
                <loc>'.site_url()."courses/".$value->slug;
                $codigo .='</loc>
                <lastmod>'.$value->date.'</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.80</priority>
                </url>';
            }
            
            foreach ($obj_category_videos as $value) {
                $codigo .='<url>
                <loc>'.site_url()."courses/".$value->slug;
                $codigo .='</loc>
                <lastmod>'.$value->created_at.'</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.80</priority>
                </url>';
            }
            
            $codigo .='<url>';
            $codigo .='<loc>'. site_url().'</loc>';
            $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
            $codigo .='</url>';
            $codigo .='<url>';
            $codigo .='<loc>'. site_url().'home'.'</loc>';
            $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
            $codigo .='</url>';
            $codigo .='<url>';
            $codigo .='<loc>'. site_url().'about'.'</loc>';
            $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
            $codigo .='</url>';
            $codigo .='<url>';
            $codigo .='<loc>'. site_url().'courses'.'</loc>';
            $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
            $codigo .='</url>';
            $codigo .='<url>';
            $codigo .='<loc>'. site_url().'register'.'</loc>';
            $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
            $codigo .='</url>';
            $codigo .='<url>';
            $codigo .='<loc>'. site_url().'terminos-condiciones'.'</loc>';
            $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
            $codigo .='</url>';
            $codigo .='<url>';
            $codigo .='<loc>'. site_url().'policy-cookies'.'</loc>';
            $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
            $codigo .='</url>';
            $codigo .='</urlset>';
            $path = "sitemap.xml";
            $modo = "w+";

            if ($fp=fopen($path,$modo)){
            fwrite ($fp,$codigo);
                echo "Se realizo con Exito";
            }
            else{
                echo "Error";
            }

	}
}
