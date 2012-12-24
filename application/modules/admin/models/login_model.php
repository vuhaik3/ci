<?php


class Login_model extends MX_Controller{
	public function __construct(){
		parent::__construct();
      $this->load->database();
	}
   public function checklogin($user,$pass) {
   	return $this->db->where("username","$user")
                      ->where("password","$pass")
                      ->get("admin")
                      ->row_array();
   }
}
?>