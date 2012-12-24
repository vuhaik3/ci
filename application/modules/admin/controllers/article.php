<?php
include("category.php");
class article extends Category{
	public function __construct(){
		parent::__construct();
	}
   public function viewarticle($uri) {  
      $data['counttable']    =  $this->getdata("article");
      
      $config                =  $this->returnpaging();
      $config['base_url']    =  base_url("admin/view-article");
      $config['total_rows']  =  count($data['counttable']);
      $this->pagination->initialize($config);
      
      $data['pagination']    =  $this->pagination->create_links();
     	$data['page']          =  $uri;
      
      $data['article']       =  $this->getdatapage("article",$uri,$config['per_page']);
      $data['url_view_page'] =  "view-article";
      $data['category']      =  $this->getdata('category');
      $data['sidebar']       =  3;
      $data['sidebar_menu']  =  $data['sidebar']."1";
      $data['tmp']           =  "view_list_article";
      $this->load->view("admin",$data);
      //$this->output->cache(5);
   }
   public function deletearticle($id) {
   	$this->delete('article',$id);
      redirect("admin/view-article");
   }
   public function addnewarticle() {
   	$data['sidebar']       =  3;
      $data['sidebar_menu']  =  $data['sidebar']."2";
      $data['tmp']           =  "add_new_article";
      $data['category']      =  $this->getdata('category');
      $this->load->view("admin",$data);
   }
   public function addnewaction() {
     $img                    =   $_FILES['image']['name'];
     if($img!=""){
      $link                   =   "public/img/product/images/".$img;
      move_uploaded_FILE($_FILES['image']['tmp_name'],$link);
      $this->resizeimage("product",$img,200);
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
     $price                  =  $this->input->post('price');
     $sale                   =  $this->input->post('sale');
     $made                   =  $this->input->post('made');
     $data                   =  array(
         "name_article"      =>  $name,
         "cat_id"            =>  $cat_id,
         "description"       =>  $desciption,
         "content"           =>  $content,
         "keyword"           =>  $keyword,
         "url"               =>  $url,
         "image"             =>  $img,
         "date"              =>  $date,
         "author"            =>  $author,
         "public"            =>  $public,
         "order"             =>  $order,
          "price"            =>  $price,
          "sale"             =>  $sale,
          "made"             =>  $made
     );
     $this->addnew('article',$data);
     redirect("admin/view-article");
   }
   public function vieweditarticle($id) {
      $data['idset']         =  $id;
   	$data['article']       =  $this->getdatabyid('article',$id);
      $data['category']      =  $this->getdata('category');
      $data['sidebar']       =  3;
      $data['sidebar_menu']  =  $data['sidebar']."-1";
      $data['tmp']           =  "edit_article";
      $this->load->view("admin",$data);
   }
   public function editaction($id) {
     $img                =   $_FILES['image']['name'];
     $name                   =  $this->input->post("name");
     $cat_id                 =  $this->input->post("cat_pa");
     $desciption             =  $this->input->post("description");
     $price                  =  $this->input->post('price');
     $sale                   =  $this->input->post('sale');
     $made                   =  $this->input->post('made');
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
     if($img!='')
     {
         $link                   =   "public/img/product/images/".$img;
         move_uploaded_FILE($_FILES['image']['tmp_name'],$link);
         $this->resizeimage("product",$img,200);
         $data                   =  array(
            "name_article"      =>  $name,
            "cat_id"            =>  $cat_id,
            "content"           =>  $content,
            "description"       =>  $desciption,
            "keyword"           =>  $keyword,
            "url"               =>  $url,
            "image"             =>  $img,
            "public"            =>  $public,
            "order"             =>  $order,
           "price"            =>  $price,
           "sale"             =>  $sale,
           "made"             =>  $made
         );
     }
     else{
         $data                   =  array(
            "name_article"      =>  $name,
            "cat_id"            =>  $cat_id,
            "content"           =>  $content,
            "description"       =>  $desciption,
            "keyword"           =>  $keyword,
            "url"               =>  $url,
            "public"            =>  $public,
            "order"             =>  $order,
           "price"            =>  $price,
           "sale"             =>  $sale,
           "made"             =>  $made
         );
     }
     $this->update('article',$id,$data);
     redirect("admin/view-article");
   }
   public function searcharticle($uri) {
      $key                   =  $this->input->post("article_s");
      $key2                  =  str_replace(" ","%",$key);
   	$data['counttable']    =  $this->getdata("article");
      
      $config                =  $this->returnpaging();
      $config['base_url']    =  base_url("admin/view-article");
      $config['total_rows']  =  count($data['counttable']);
      $this->pagination->initialize($config);
      
      $data['pagination']    =  $this->pagination->create_links();
     	$data['page']          =  $uri;
      
      $data['article']       =  $this->getdatasearch("article","name_article",$key2,$uri,$config['per_page']);
      $data['url_view_page'] =  "view-article";
      $data['category']      =  $this->getdata('category');
      $data['sidebar']       =  3;
      $data['sidebar_menu']  =  $data['sidebar']."1";
      $data['tmp']           =  "view_list_article";
      $this->load->view("admin",$data);
   }
}
?>