<?php


class Contact_model extends MX_Controller{
	public function __construct(){
		parent::__construct();
      $this->load->database();
	}
   public function getdatapaging($start,$limit) {
   	return $this->db->order_by("date DESC")
                      ->limit($limit,$start)
                      ->get("contact")
                      ->result_array();                        
   }
}
?>