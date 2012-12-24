<?php

include("contact.php");
class Banner extends Contact{
	public function __construct(){
		parent::__construct();
	}
   public function view_banner() {
   	$data['banner']        =  $this->getdata('banner');
      $data['sidebar']       =  1;
      $data['sidebar_menu']  =  $data['sidebar']."3";
      $data['tmp']           =  "view_banner";
      
      $this->load->view("admin",$data);
   }
   public function deletebanner($id) {
   	$this->delete('banner',$id);
      redirect("admin/view-banner");
   }
   public function addnewaction() {
  	  $img                    =   $_FILES['image']['name'];
     if($img!=""){
      $link                   =   "public/img/banner/images/".$img;
      move_uploaded_FILE($_FILES['image']['tmp_name'],$link);
      $this->resizeimage("banner",$img,200);
     }   
     $data                   =   array(
         "name"              =>  $this->input->post("name"),
         "link"              =>  $this->input->post("link"),
         "image"             =>  $img,
         "content"           =>  $this->input->post("content")
     );
     
     $this->addnew('banner',$data);
     redirect("admin/view-banner");
   }
   
   public function view_ediform($id) {
      $data['idset']         =  $id;
   	$data['banner']        =  $this->getdatabyid('banner',$id);
      $data['sidebar']       =  1;
      $data['sidebar_menu']  =  $data['sidebar']."3";
      $data['tmp']           =  "view_edit_banner";
      
      $this->load->view("admin",$data);
   }
   public function editaction($id) {
   	
      $img                    =   $_FILES['image']['name'];
      if($img==""){
         $data                   =   array(
         "name"              =>  $this->input->post("name"),
         "link"              =>  $this->input->post("link"),
         "content"           =>  $this->input->post("content")
         );
      }
      else{
        $link                   =   "public/img/banner/images/".$img;
        move_uploaded_FILE($_FILES['image']['tmp_name'],$link);
        $this->resizeimage("banner",$img,200);
        
        $data                   =   array(
            "name"              =>  $this->input->post("name"),
            "link"              =>  $this->input->post("link"),
            "image"             =>  $img,
            "content"           =>  $this->input->post("content")
            );
         
      }
      $this->update('banner',$id,$data);
      redirect('admin/view-banner');
   }
}
?>