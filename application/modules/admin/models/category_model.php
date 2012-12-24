<?php


class Category_model extends MX_Controller{
	public function __construct(){
		parent::__construct();
      $this->load->database();
      
	}
   public function getsession() {
   	return $this->db->where("cat_parent",0)
                      ->order_by("id DESC")
                      ->get("category")
                      ->result_array();
   }
   public function getcategory() {
   	return $this->db->where("cat_parent !=",0)
                      ->order_by("id DESC")
                      ->get("category")
                      ->result_array();
   }
}
?>