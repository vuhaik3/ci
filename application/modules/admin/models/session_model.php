<?php


class Session_model extends MX_Controller{
	public function __construct(){
		parent::__construct();
      $this->load->database();
	}
   public function getsessionbyid($id) {
   	return $this->db->where("id",$id)
                      ->get("session")
                      ->row_array();
   }
}
?>