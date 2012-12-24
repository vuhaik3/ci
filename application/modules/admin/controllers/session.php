<?php
	include("news.php");

class Session extends News{
   	public function __construct(){
   		parent::__construct();
         $this->load->model("session_model");
   	}
      public function viewsession($uri) {
        	$data['counttable']    =  $this->getdata("session");
         
         $config                =  $this->returnpaging();
         $config['base_url']    =  base_url("admin/view-session");
         $config['total_rows']  =  count($data['counttable']);
         $this->pagination->initialize($config);
         
         $data['pagination']    =  $this->pagination->create_links();
        	$data['page']          =  $uri;
          
        	$data['session']       =  $this->getdatapage("session",$uri,$config['per_page']);
         $data['url_view_page'] =  "view-session";
        	$data['tmp']           =  "view_session";
            
         $data['sidebar']       =  2;
         $data['sidebar_menu']  =  $data['sidebar']."1";
      
         $this->load->view("admin",$data);
    }
    public function addnewaction() {
    	    $name     =    $this->input->post("name");
          $position =    $this->input->post("position");
          $public   =    $this->input->post("public");
          $intro    =    $this->input->post("intro");
          $order    =    $this->input->post("order");
          $des      =  $this->input->post("description");
           if($des==""){
            $des            =  $name;
           }
           $key     =  $this->input->post("keyword");
           if($key==""){
               $key         =  $name;
           }
          $url      =    $this->input->post("url");
          if($url==""){
            $url    =    $this->convert_vi_to_en($name);
          }
          
          $data     =   array(
            "name_session"    => $name,
            "position"        => $position,
            "public"          => $public,
            "intro"           => $intro,
            "description"     => $des,
            "keyword"         => $key,
            "url"             => $url
          );
          $this->addnew("session",$data);
          redirect("admin/view-session");
    }
   public function vieweditform($id) {
	   $data['idset']         =  $id;
   	$data['session']       =  $this->session_model->getsessionbyid($id);
      $data['tmp']           =  "editsess";
      
      $data['sidebar']       =  2;
      $data['sidebar_menu']  =  $data['sidebar']."1";
      
      $this->load->view("admin",$data);
   }
   public function editaction($id) {
          $name     =    $this->input->post("name");
          $position =    $this->input->post("position");
          $public   =    $this->input->post("public");
          $intro    =    $this->input->post("intro");
          $order    =    $this->input->post("order");
          $des      =  $this->input->post("description");
           if($des==""){
            $des            =  $name;
           }
           $key     =  $this->input->post("keyword");
           if($key==""){
               $key         =  $name;
           }
          $url      =    $this->input->post("url");
          if($url==""){
            $url    =    $this->convert_vi_to_en($name);
          }
          
          $data     =   array(
            "name_session"    => $name,
            "position"        => $position,
            "public"          => $public,
            "intro"           => $intro,
            "description"     => $des,
            "keyword"         => $key,
            "url"             => $url
          );
          $this->update("session",$id,$data);
          redirect("admin/view-session");
    }
   
}
?>