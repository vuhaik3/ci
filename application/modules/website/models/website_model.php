<?php


class Website_model extends MX_Controller{
	public function __construct(){
		parent::__construct();
      $this->load->database();
	}
   public function getmetaindex() {
   	return $this->db->get("dashboard")
                      ->row_array();
      $this->db->free_result();
   }
   public function getpagesposition($position) {
   	return $this->db->where("public",1)
                      ->where("position",$position)
                      ->order_by("order ASC")
                      ->select("name_pages,id,content,type,url")
                      ->get("pages")
                      ->result_array();
                      $this->db->free_result();
   }
   public function getsessionposition($position) {
   	return $this->db->query("select id from session where public=1 and position='$position' order by 'order' ASC")
                      ->result_array();
                      $this->db->free_result();
   }
   public function gettable($table) {
   	return $this->db->where("public",1)
                      ->order_by("order ASC")
                      ->get($table)
                      ->result_array();
                      $this->db->free_result();
   }
   public function getbanner() {
   	return $this->db->select("image,link,content")
                      ->get("banner")
                      ->result_array();
                      $this->db->free_result();
   }
   public function getproductnew($limit) {
   	return $this->db->select("name_article,url,id,image,cat_id")
                      ->where("public",1)
                      ->order_by("date DESC")
                      ->order_by("order ASC")
                      ->limit($limit)
                      ->get("article")
                      ->result_array();
                      $this->db->free_result();
   }
   public function getEmailSend() {
   	return $this->db->select('email')
                      ->get('dashboard')
                      ->row_array();
                      $this->db->free_result();
   }
   public function getmetacatorpages($table,$id) {
   	return $this->db->select("name_".$table.",description,keyword")
                      ->where("id",$id)
                      ->get($table)
                      ->row_array();
                      $this->db->free_result();
   }
   public function getproductbycat($catid) {
   	return $this->db->query("select article.name_article,article.id,article.image,article.url from article inner join category on article.cat_id=category.id and category.id=$catid")
                      ->result_array();
                      $this->db->free_result();
   }
   public function getpage($id) {
   	return $this->db->query("select content from pages where id=$id")
                      ->row_array();
                      $this->db->free_result();
   }
   public function getsupport() {
   	return $this->db->select("name,nickname,type")
                    ->order_by('order ASC')
                      ->get("onlinesupport")
                      ->result_array();
                      $this->db->free_result();
   }
   public function getnewbypage($id) {
   	return $this->db->query("select name_news,news.id,news.url,date,author,image,news.content from news inner join pages on news.page_id=pages.id and pages.id=$id")
                      ->result_array();
                      $this->db->free_result();
   }
  public function getProductById($id) {
  	   return $this->db->where('id', $id)
                      ->get('article')
                      ->row_array();
    $this->db->free_result();
                      
  }
  public function addContact($contact) {
    return $this->db->insert('contact', $contact);
    $this->db->free_result();
  }
}
?>