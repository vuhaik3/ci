<?php
include("banner.php");

class Pages extends Banner{
	public function __construct(){
		parent::__construct();
	}
   public function view_pages($uri) {
      $data['page']          =  $uri;
      $data['counttable']    =  $this->getdata("pages");
      $config                =  $this->returnpaging();
      
      $config['base_url']    =  base_url("admin/view-pages");
      $config['total_rows']  =  count($data['counttable']);
      $this->pagination->initialize($config);
      $data['pagination']    =  $this->pagination->create_links();
      
   	$data['pages']         =  $this->getdatapage("pages",$uri,$config['per_page']);
      $data['sidebar']       =  5;
      $data['sidebar_menu']  =  $data['sidebar']."1";
      $data['tmp']           =  "view_pages";
      
      $this->load->view("admin",$data);
   }
   public function addnewaction() {
   	$name                  =  $this->input->post("name");
      $type                  =  $this->input->post("type");
      $description           =  $this->input->post("description");
     if($description==""){
      $description           =  $name;
     }
     $keyword                =  $this->input->post("keyword");
     if($keyword==""){
         $keyword            =  $name;
     }
      $content               =  $this->input->post("content");
      $url                   =  $this->input->post("url");
      $order                 =  $this->input->post("order");
      $public                =  $this->input->post("public");
      $position              =  $this->input->post("position");
      if($url==''){
         $url                =  $this->convert_vi_to_en($name);
      }
      $data                  =  array(
         "name_pages"        => $name,
         "description"       => $description,
         "order"             => $order,
         "keyword"           => $keyword,
         "content"           => $content,
         "type"              => $type,
         "url"               => $url,
         "position"          => $position,
         "public"            => $public
      );
      $this->addnew("pages",$data);
      redirect("admin/view-pages");
   }
   public function view_edit_page($id) {
      $data['idset']         =  $id;
   	$data['pages']         =  $this->getdatabyid('pages',$id);
      $data['sidebar']       =  5;
      $data['sidebar_menu']  =  $data['sidebar']."-1";
      $data['tmp']           =  "view_edit_page";
      
      $this->load->view("admin",$data);
   }
   public function editaction($id) {
   	$name                  =  $this->input->post("name");
      $type                  =  $this->input->post("type");
       $description          =  $this->input->post("description");
     if($description==""){
      $description           =  $name;
     }
     $keyword                =  $this->input->post("keyword");
     if($keyword==""){
         $keyword            =  $name;
     }
      $content               =  $this->input->post("content");
      $url                   =  $this->input->post("url");
      $order                 =  $this->input->post("order");
      $position              =  $this->input->post("position");
      $public                =  $this->input->post("public");
      
      if($url==''){
         $url                =  $this->convert_vi_to_en($name);
      }
      $data                  =  array(
         "name_pages"        => $name,
         "description"       => $description,
         "order"             => $order,
         "keyword"           => $keyword,
         "content"           => $content,
         "type"              => $type,
         "url"               => $url,
         "position"          => $position,
         "public"            => $public
      );
      $this->update('pages',$id,$data);
      redirect("admin/view-pages");
   }
}
?>