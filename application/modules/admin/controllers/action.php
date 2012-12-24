<?php
include("login.php");
class Action extends Login{
	public function __construct(){
		parent::__construct();
      $this->checklogin();
      $this->load->model("action_model");
      ini_set('memory_limit','160M');
	}
   public function returnpaging() {
   	return array(
         "uri_segment"  => 3,
         "per_page"     => 20,
         "cur_tag_open" => "<a class='number current'>",
         "cur_tag_close"=> "</a>"  
      );
      
   }
   public function contact() {
   	return $this->action_model->getdata("contact");
   }
   public function addnew($table,$data) {
   	$this->action_model->addnew($table,$data);
   }
   public function delete($table,$id) {
   	$this->action_model->delete($table,$id);
   }
   public function deleteaction($table,$id,$link) {
   	$this->action_model->delete($table,$id);
      redirect("admin/".$link);
   }
   public function update($table,$id,$data) {
   	$this->action_model->update($table,$id,$data);
   }
   public function getdata($table) {
   	return $this->action_model->getdata($table);
   }
   public function getdatapage($table,$start,$limit) {
   	return $this->action_model->getdatapaging($table,$start,$limit);
   }
   public function getdatabyid($table,$id) {
   	return $this->action_model->getdatabyid($table,$id);
   }
   public function getdatabyorder($table) {
   	return $this->action_model->getdatabyorder($table);
   }
   public function deleteall($table,$page) {
      
    	if($this->input->post("action")=='delete'){
    	   
                $del         =   $this->getdata($table);
           
           foreach ($del as $del2) {
                $check      =   "del_".$del2['id'];
                $del_check  =   $this->input->post($check);
                if($del_check=='on'){
                    $this->delete($table,$del2['id']);
                }  
           }
           redirect("admin/view-".$page);
    	}
      if($this->input->post("action")=="saveorder"):
         $dataorder  =  $this->getdata($table);
         foreach($dataorder as $order){
            $ordernew=  $this->input->post("order_".$order['id']);
            $ordernew=  number_format($ordernew,0);
            if($ordernew):
               $data    =  array("order"=>$ordernew);
               $this->update($table,$order['id'],$data);
            endif;
         }
         redirect("admin/view-".$page);
         
      endif;
    }
   // Hàm resize hình ảnh
   public function resizeimage($patch,$img_name,$width) {
        $config['image_library']    = 'gd2';
        $config['source_image']     = 'public/img/'.$patch.'/images/'.$img_name;
        $config['new_image']        = 'public/img/'.$patch.'/thumb/';
        $config['create_thumb']     = TRUE;
        $config['maintain_ratio']   = TRUE;
        $config['thumb_marker']     = '';
        //$config['width']            = 75;
        $config['height']           = $width;
        $config['width']            = $width;
        $this->load->library('image_lib', $config);
        
        $this->image_lib->resize();
        
        if(!$this->image_lib->resize()){
            echo "no";
        }
    }
    // Hàm chuyển từ có dấu sang dạng link không dấu,viết thường
    public function convert_vi_to_en($str) {
        $str = trim($str);
        $str = preg_replace("/(')/", '', $str);
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
        $str = preg_replace("/(Đ|D)/", 'd', $str);
        
        $str = str_replace(":", "",$str);
        $str = str_replace("@", "",$str);
        $str = str_replace("%", "",$str);
        $str = str_replace("&", "",$str);
        $str = str_replace("]", "",$str);
        $str = str_replace("[", "",$str);
        $str = str_replace("!", "",$str);
        $str = str_replace("$", "",$str);
        $str = str_replace("*", "",$str);
        $str = str_replace("#", "",$str);
        $str = str_replace("(", "",$str);
        $str = str_replace("^", "",$str);
        $str = str_replace(">", "",$str);
        $str = str_replace("<", "",$str);
        $str = str_replace(")", "",$str);
        $str = str_replace(".", "",$str);
        $str = str_replace(" ", "-",$str);
        $str = str_replace("---","-",$str);
        $str = str_replace("--", "-",$str);
        $str = strtolower($str);//Hàm chuyển các kí tự in hoa thành viết thường
        return $str;
    }
    public function changepublic($table,$id,$public,$page) {
        $public=($public+1)%2;
        $this->action_model->changepublicmodel($table,$id,$public);
        if($table=='article'){
         redirect("admin/view-article/".$page);
        }
        if($table=='category'){
         redirect("admin/view-category/".$page);
        }
        if($table=='news'){
         redirect("admin/view-news/".$page);
        }
        if($table=="pages"){
         redirect("admin/view-pages/".$page);
        }
        if($table=="session"){
         redirect("admin/view-session/".$page);
        }
    }
    public function getdatasearch($table,$name_field,$key,$start,$limit) {
    	return $this->action_model->getdatasearch($table,$name_field,$key,$start,$limit);
    }
}
?>