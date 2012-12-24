<?php
include("admin.php");

class Contact extends Admin{
	public function __construct(){
		parent::__construct();
	}
   public function onlinesupport() {
   	$data['nick']          =  $this->getdata('onlinesupport');
      $data['sidebar']       =  1;
      $data['sidebar_menu']  =  $data['sidebar']."2";
      $data['tmp']           =  "supportonline";
      
      $this->load->view("admin",$data);
   }
   public function add_nick_support() {
   	$data                  =  array(
         "name"              => $this->input->post("name"),
         "nickname"          => $this->input->post("nickname"),
         "type"              => $this->input->post("type")
      );
      $this->addnew('onlinesupport',$data);
      redirect("admin/view-support");
   }
   public function delete_nickname($id) {
   	$this->delete('onlinesupport',$id);
      redirect("admin/view-support");
   }
   public function edit_form($id) {
   	$data['nick']          =  $this->getdatabyid('onlinesupport',$id);
      $data['idset']         =  $id;
      $data['sidebar']       =  1;
      $data['sidebar_menu']  =  $data['sidebar']."-1";
      $data['tmp']           =  "edit_support_online_form";
      
      $this->load->view("admin",$data);
   }
   public function ediaction($id) {
   	$data                  =  array(
         "name"              => $this->input->post("name"),
         "nickname"          =>  $this->input->post("nickname"),
         "type"              => $this->input->post("type")
      );
      $this->update('onlinesupport',$id,$data);
      redirect("admin/view-support");
   }
}
?>