<?php

include("session.php");
class Contactweb extends Session{
	public function __construct(){
		parent::__construct();
      $this->load->model("contact_model");
	}
   public function viewcontact($uri) {
   	$data['counttable']    =  $this->getdata("contact");
      
      $config                =  $this->returnpaging();
      $config['base_url']    =  base_url("admin/view-contact");
      $config['total_rows']  =  count($data['counttable']);
      $this->pagination->initialize($config);
      
      $data['pagination']    =  $this->pagination->create_links();
     	$data['page']          =  $uri;
      
      $data['contact']       =  $this->contact_model->getdatapaging($uri,$config['per_page']);
      $data['url_view_page'] =  "view-contact";
      
      $data['sidebar']       =  6;
      $data['sidebar_menu']  =  $data['sidebar']."1";
      $data['tmp']           =  "view_contact";
      
      $this->load->view("admin",$data);
   }
}
?>