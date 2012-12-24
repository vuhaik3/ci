<?php
include("pages.php");

class News extends Pages{
	public function __construct(){
		parent::__construct();
	}
   public function view_news($uri) {
      $data['page']          =  $uri;
      $data['counttable']    =  $this->getdata("news");
      $config                =  $this->returnpaging();
      
      $config['base_url']    =  base_url("admin/view-news");
      $config['total_rows']  =  count($data['counttable']);
      $this->pagination->initialize($config);
      
      $data['pagination']    =  $this->pagination->create_links();
   	$data['news']          =  $this->getdatapage("news",$uri,$config['per_page']);
      $data['pages']         =  $this->getdata('pages');
      $data['sidebar']       =  5;
      $data['sidebar_menu']  =  $data['sidebar']."2";
      $data['tmp']           =  "view_news";
      
      $this->load->view("admin",$data);
   }
   public function addnewaction() {
     $img                    =   $_FILES['image']['name'];
     if($img){
        $link                   =   "public/img/news/images/".$img;
        move_uploaded_FILE($_FILES['image']['tmp_name'],$link);
        $this->resizeimage("news",$img,200);
     }
	  $name                   =  $this->input->post("name");
     $cat_id                 =  $this->input->post("cat_pa");
      $desciption             =  $this->input->post("description");
     if($desciption==""){
      $desciption            =  $name;
     }
     $keyword                =  $this->input->post("keyword");
     if($keyword==""){
         $keyword            =  $name;
     }
     $public                 =  $this->input->post("public");
     $order                  =  $this->input->post("order");
     $url                    =  $this->input->post("url");
        if($url=='')
        {
         $url                =  $this->convert_vi_to_en($name);
        }
     $content                =  $this->input->post("content");
     $now                    =  getdate();
     $date                   =  $now['year']."-".$now['mon']."-".$now['mday'];
     $author                 =  $_SESSION['name'];
     
     
     $data                   =  array(
         "name_news"         =>  $name,
         "content"           =>  $content,
         "page_id"           =>  $cat_id,
         "description"       =>  $desciption,
         "keyword"           =>  $keyword,
         "url"               =>  $url,
         "image"             =>  $img,
         "date"              =>  $date,
         "author"            =>  $author,
         "public"            =>  $public,
         "order"             =>  $order
     );
     
     $this->addnew('news',$data);
     redirect("admin/view-news");
   }
   public function view_editnews($id) {
      $data['idset']         =  $id;
   	$data['news']          =  $this->getdatabyid('news',$id);
      $data['pages']         =  $this->getdata('pages');
      $data['sidebar']       =  5;
      $data['sidebar_menu']  =  $data['sidebar']."-1";
      $data['tmp']           =  "edit_news";
      
      $this->load->view("admin",$data);
   }
   public function editaction($id) {
   	$img                    =   $_FILES['image']['name'];
      $name                   =  $this->input->post("name");
     $cat_id                 =  $this->input->post("cat_pa");
      $desciption             =  $this->input->post("description");
     if($desciption==""){
      $desciption            =  $name;
     }
     $keyword                =  $this->input->post("keyword");
     if($keyword==""){
         $keyword            =  $name;
     }
     $public                 =  $this->input->post("public");
     $order                  =  $this->input->post("order");
     $url                    =  $this->input->post("url");
        if($url=='')
        {
         $url                =  $this->convert_vi_to_en($name);
        }
     $content                =  $this->input->post("content");
     $author                 =  $_SESSION['name'];
     
     if($img==''){
         $data                   =  array(
         "name_news"         =>  $name,
         "content"           =>  $content,
         "page_id"           =>  $cat_id,
         "description"       =>  $desciption,
         "keyword"           =>  $keyword,
         "url"               =>  $url,
         
         
         "author"            =>  $author,
         "public"            =>  $public,
         "order"             =>  $order
      );
     }
     else{
      $link                   =   "public/img/news/images/".$img;
      move_uploaded_FILE($_FILES['image']['tmp_name'],$link);
      $this->resizeimage("news",$img,200);
      $data                   =  array(
         "name_news"         =>  $name,
         "content"           =>  $content,
         "page_id"           =>  $cat_id,
         "description"       =>  $desciption,
         "keyword"           =>  $keyword,
         "url"               =>  $url,
         "image"             =>  $img,
         
         "author"            =>  $author,
         "public"            =>  $public,
         "order"             =>  $order
      );
     }
     
     $this->update('news',$id,$data);
     redirect("admin/view-news");
      
   }
}
?>