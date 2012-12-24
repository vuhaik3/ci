<?php
include("article.php");
class Admin extends article{
	public function __construct(){
		parent::__construct();
	}
   public function index() {
   	$this->editdashboard(1);
   }
   public function editdashboard($id) {
   	$data['dashboard']     =  $this->getdatabyid('dashboard',1);
      $data['sidebar']       =  1;
      $data['sidebar_menu']  =  $data['sidebar']."1";
      $data['tmp']           =  "dashboard";
      $this->load->view("admin",$data);
   }
   public function editaction($id) {
   	$title                 =  $this->input->post("title");
      $metadescription       =  $this->input->post("description");
      $metakeyword           =  $this->input->post("keyword");
      $email                 =  $this->input->post("email");
      $data                  =  array(
         "title"             => trim($title),
         "metadescription"   => trim($metadescription),
         "metakeyword"       => trim($metakeyword),
         "email"             => trim($email)
      );
      $this->update('dashboard',1,$data);
      redirect("admin/dashboard");
   }
   public function viewprofile() {
      
      $data['idset']         =  $_SESSION['admin_id'];
   	$data['admin']         =  $this->getdatabyid('admin',$_SESSION['admin_id']);
      $data['sidebar']       =  4;
      $data['sidebar_menu']  =  $data['sidebar']."1";
      $data['tmp']           =  "view_profile_admin";
      $this->load->view("admin",$data);
   }
   public function viewprofileedit($id) {
      
      $data['idset']         =  $id;
   	$data['admin']         =  $this->getdatabyid('admin',$id);
      $data['sidebar']       =  4;
      $data['sidebar_menu']  =  $data['sidebar']."1";
      $data['tmp']           =  "view_profile_admin";
      $this->load->view("admin",$data);
   }
   public function edit_action($id) {
   	$name                  =  $this->input->post("name");
      $username              =  $this->input->post("username");
      $email                 =  $this->input->post("email");
      $usertype              =  $this->input->post("usertype");
      if($_SESSION['usertype']=='administrator'){
         $data               =  array(
            "name"           => $name,
            "username"       => $username,
            "email"          => $email,
            "usertype"       => $usertype
         );
      }
      else{
         $data               =  array(
            "name"           => $name,
            "email"          => $email
         );
      }
      $this->update('admin',$id,$data);
      redirect("admin/profile".$id);
   }
   public function viewchangepassword() {

         $data['idset']         =  $_SESSION['admin_id'];
      	$data['admin']         =  $this->getdatabyid('admin',$_SESSION['admin_id']);
         $data['sidebar']       =  4;
         $data['sidebar_menu']  =  $data['sidebar']."2";
         $data['tmp']           =  "view_changepassword";
         $this->load->view("admin",$data);
   	
   }
   public function changepassaction($id) {
   	$password_old          =  $this->input->post("o_pass");
      $password_new          =  $this->input->post("n_pass");
      $admin                 =  $this->getdatabyid('admin',$id);
      if($password_old==$admin[0]['password'])
      {
         $data               =  array(
            "password"       => $password_new
         );
         $this->update('admin',$id,$data);
         $_SESSION['change'] =   "ok";
         redirect('admin/changepassword');
      }
      else{
         $_SESSION['change'] =   "no";
         redirect("admin/changepassword");
      }
   }
   public function add_new_user() {
      if($_SESSION['usertype']=='administrator'){
         $data['sidebar']       =  4;
         $data['sidebar_menu']  =  $data['sidebar']."3";
         $data['tmp']           =  "view_add_new_user";
         
         $this->load->view("admin",$data);
      }
      else{
         die();
      }
   	
   }
   public function adduser() {

      	$data                  =  array(
            "username"          =>  $this->input->post("username"),
            "password"          =>  $this->input->post("password"),
            "email"             =>  $this->input->post("email"),
            "name"              =>  $this->input->post("name"),
            "usertype"          =>  $this->input->post("usertype") 
         );
         $this->addnew('admin',$data);

      redirect("admin/view-listuser");

   }
   public function view_list_user() {
   	if($_SESSION['usertype']=='administrator'){
         $data['sidebar']       =  4;
         $data['sidebar_menu']  =  $data['sidebar']."4";
         $data['tmp']           =  "view_list_user";
         $data['admin']          =  $this->getdata('admin');
         
         $this->load->view("admin",$data);
      }
      else{
         die();
      }
   }
}
?>