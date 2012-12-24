<?php

include("action.php");
class Category extends Action{
	public function __construct(){
		parent::__construct();
      $this->load->model("category_model");
	}
   public function viewcategory($uri) {
      $data['counttable']    =  $this->getdata("category");
       
      $config                =  $this->returnpaging();
      $config['base_url']    =  base_url("admin/view-category");
      $config['total_rows']  =  count($data['counttable']);
      $this->pagination->initialize($config);
         
      $data['pagination']    =  $this->pagination->create_links();
    	$data['page']          =  $uri;
      
   	$data['category']      =  $this->getdatapage("category",$uri,$config['per_page']);
      
      $data['url_view_page'] =  "view-category";
   	$data['tmp']           =  "view_category";
      $data['session']       =  $this->getdata("session");
      $data['sidebar']       =  2;
      $data['sidebar_menu']  =  $data['sidebar']."2";

      $this->load->view("admin",$data);
   }
   public function addnewcategory() {
   	
      $data['tmp']           =  "add_new_category";
      $data['session']       =  $this->getdata("session");
      $data['sidebar']       =  2;
      $data['sidebar_menu']  =  $data['sidebar']."3";
      
      $this->load->view("admin",$data);
   }
   public function addnewaction() {
   	$name                  =  $this->input->post("name");
      $cat_pa                =  $this->input->post("cat_pa");
      $description             =  $this->input->post("description");
     if($description==""){
      $description            =  $name;
     }
     $keyword                =  $this->input->post("keyword");
     if($keyword==""){
         $keyword            =  $name;
     }
      $intro                 =  $this->input->post("intro");
      $url                   =  $this->input->post("url");
      $public                =  $this->input->post("public");
      $order                 =  $this->input->post("order");
      if($url==''){
         $url                =  $this->convert_vi_to_en($name);
      }
      $data                  =  array(
         "name_category"          => $name,
         "description"       => $description,
         "keyword"           => $keyword,
         "intro"             => $intro,
         "cat_parent"        => $cat_pa,
         "url"               => $url,
         "public"            => $public,
         "order"             => $order
      );
      $this->addnew("category",$data);

         redirect("admin/view-category");
   }
   public function vieweditform($id) {
      $data['idset']         =  $id;
   	$data['cat']           =  $this->getdatabyid("category",$id);
      $data['tmp']           =  "editcategory";
      $data['session']       =  $this->getdata("session");
      $data['sidebar']       =  2;
      $data['sidebar_menu']  =  $data['sidebar']."-1";
      
      $this->load->view("admin",$data);
   }
   public function editaction($id) {
   	$name                  =  $this->input->post("name");
      $cat_pa                =  $this->input->post("cat_pa");
      $description             =  $this->input->post("description");
     if($description==""){
      $description            =  $name;
     }
     $keyword                =  $this->input->post("keyword");
     if($keyword==""){
         $keyword            =  $name;
     }
      $intro                 =  $this->input->post("intro");
      $public                =  $this->input->post("public");
      $order                 =  $this->input->post("order");
      $url                   =  $this->input->post("url");
      if($url==''){
         $url                =  $this->convert_vi_to_en($name);
      }
      $data                  =  array(
         "name_category"          => $name,
         "description"       => $description,
         "keyword"           => $keyword,
         "intro"             => $intro,
         "cat_parent"        => $cat_pa,
         "url"               => $url,
         "public"            => $public,
         "order"             => $order
      );
      $this->update("category",$id,$data);
      
         redirect("admin/view-category");
   }
}
?>