<?php
class Action_model extends MX_Controller{
	public function __construct(){
		parent::__construct();
      $this->load->database();
      
	}
   public function addnew($table,$data) {
   	return $this->db->insert($table,$data);
      $this->db->free_result();
      
   }
   public function delete($table,$id) {
   	return $this->db->where("id","$id")
                      ->delete($table);
                      $this->db->free_result();
   }
   public function update($table,$id,$data) {
   	return $this->db->where("id","$id")
                      ->update($table,$data);
    $this->db->free_result();
   }
   public function getdata($table) {
   	return $this->db->order_by("id DESC")
                      ->get($table)
                      ->result_array();
    $this->db->free_result();
   }
   public function getdatabyid($table,$id) {
   	return $this->db->where("id","$id")
                      ->get($table)
                      ->result_array();
    $this->db->free_result();
   }
   public function getnumrow($table) {
   	return $this->db->get($table)
                      ->num_rows();
    $this->db->free_result();
   }
   public function getdatapaging($table,$start,$perpage) {
   	return $this->db->limit($perpage,$start)
                      ->order_by("order ASC")
                      ->order_by("name_".$table)
                      ->get($table)
                      ->result_array();
    $this->db->free_result();
   }
   public function getdatabyorder($table) {
   	return $this->db->order_by("order ASC")
                      ->order_by("id DESC")
                      ->get($table)
                      ->result_array();
    $this->db->free_result();
    
   }
   
   public function changepublicmodel($table,$id,$public) {
   	return $this->db->where("id",$id)
                      ->update($table,array("public" => $public));
    $this->db->free_result();
   }
   public function getdatasearch($table,$name_field,$key,$start,$limit) {
   	return
      $this->db->query("select * from $table where $name_field like '%$key%' order by $name_field limit $start,$limit")->result_array();
      $this->db->free_result();
   }
}
?>