<?php
session_start();
class Login extends MX_Controller{
	public function __construct(){
		parent::__construct();
      $this->load->model("login_model");
	}
   public function loginform() {
      if(!isset($_SESSION['login']) or !$_SESSION['login']){
         $this->load->view("login");
      }
      else{
         redirect("admin/login-ok");
      }
   }
   public function checklogin() {
   	if(!$_SESSION['login']){
   	  redirect("admin");
   	}
   }
   public function loginaction() {
   	$user   =  $this->input->post("username");
      $pass   =  $this->input->post("password");
      $check  =  $this->login_model->checklogin($user,$pass);
      if($check){
         $_SESSION   =  array(
            "name"      => $check['name'],
            "usertype"  => $check['usertype'],
            "login"     => true,
            "admin_id"  => $check['id']
         );
         redirect("admin/login-ok");
      }
      else{
         $_SESSION['erorr']   =  1;
         redirect("admin");
      }
   }
   public function logout() {
   	session_destroy();
      redirect("admin");
   }
}
?>