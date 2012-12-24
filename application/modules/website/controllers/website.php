<?php
require_once('phpmail/class.phpmailer.php');
class Website extends MX_Controller{
	public function __construct(){
		parent::__construct();
      $this->load->model("website_model");
    $this->load->library('cart');

  }
   public function index() {
      $data              =  $this->getdatawebsite();
      $meta              =  $this->website_model->getmetaindex();
      $data['meta']      =  array(
         "title"         =>   $meta['title'],
         "description"   =>   $meta['metadescription'],
         "keyword"       =>   $meta['metakeyword']
      );
      
      $data['current']   =  -1;
      $data['special']   =  $this->website_model->getproductnew(9);
      
      $data['pagesview'] =  "index";
   	$this->load->view("website",$data);
   }
   public function viewbycategory($idcat) {
   	$data              =  $this->getdatawebsite();
      $meta              =  $this->getmetacatorpage("category",$idcat);
      $data['meta']      =  array(
         "title"         =>   $meta['title'],
         "description"   =>   $meta['description'],
         "keyword"       =>   $meta['keyword']
      );
      
      $data['product']   =  $this->website_model->getproductbycat($idcat);
      $data['current']   =  0;
      $data['licurrent'] =  $idcat;
      $data['pagesview'] =  "category";
      $this->load->view("website",$data);
   }
   public function viewpage($type,$id) {
   	$data              =  $this->getdatawebsite();
      $meta              =  $this->getmetacatorpage("pages",$id);
      $data['meta']      =  array(
         "title"         =>   $meta['title'],
         "description"   =>   $meta['description'],
         "keyword"       =>   $meta['keyword']
      );
      
      $data['current']   =  $id;
      $data['pagesview'] =  "page";
      $data['type']      =  $type;
      
      $data['content']   =  $this->website_model->getpage($id);
      $data['news']      =  $this->website_model->getnewbypage($id);
      $this->load->view("website",$data);
   }
   /*
   *  function get data of website
   */
   public function getdatawebsite() {
      
      return array(
         "menu"         =>  $this->website_model->getpagesposition("main-menu"),
         "session"      =>  $this->website_model->getsessionposition("right"),
         "category"     =>  $this->website_model->gettable("category"),
         "pr"           =>  $this->website_model->getpagesposition("left"),
         "banner"       =>  $this->website_model->getbanner(),
         "footer"       =>  $this->website_model->getpagesposition("footer"),
         "licurrent"    =>  -1,
         'current'      =>  0,
         "support"      =>  $this->website_model->getsupport()
      );
   	
   }
   /*
         function get meta data of page
   
   */
   public function getmetacatorpage($table,$id) {
      $meta    =  $this->website_model->getmetacatorpages($table,$id);
      
   	return array(
         "title"        => $meta['name_'.$table],
         "description"  => $meta['description'],
         "keyword"      => $meta['keyword']
      );
      
      
   }
   /*
   
      function view product
   */
   public function viewproduct($id) {
   	$data            =  $this->getdatawebsite();
      $product         =  $this->website_model->getProductById($id);
      $data['product'] =  $product;
      $data['meta']    =  array(
         'title'       => $product['name_article'],
         'description' => $product['description'],
         'keyword'     => $product['keyword']
      );
      
      $data['pagesview'] =  "product";
      $data['current']   =  0;
      $data['licurrent'] =  $product['cat_id'];
      
      $this->load->view("website",$data);
   }
   
   //function get meta of product
   public function getMetaProduct($id) {
   	return $this->website_model->getMetaPro($id);
   }
   //function action contact
   public function sendcontact() {
      $email_send      =  $this->website_model->getEmailSend();
      $email_send      =  $email_send['email'];
   	  $name_contact    =  $this->input->post("namecontact");
      $phone           =  $this->input->post("phone");
      $address         =  $this->input->post("adress");
      $email           =  $this->input->post("email");
      $content         =  strip_tags($this->input->post("content"));

     $now = getdate();
     $date = $now['year'] . "-" . $now['mon'] . "-" . $now['mday'];

     $contact = array(
       'name' => $name_contact,
       'date' => $date,
       'phone' => $phone,
       'content' => $content,
       'new' => 1,
       'email' => $email
     );
     $this->website_model->addContact($contact);
      /* Load email class */
      $this->sendemail($email_send, $name_contact, $phone, $address, $email, $content, $date);
      
   }
    public  function success() {
      $data            =  $this->getdatawebsite();
      $meta              =  $this->website_model->getmetaindex();
      $data['meta']      =  array(
        "title"         =>   $meta['title'],
        "description"   =>   $meta['metadescription'],
        "keyword"       =>   $meta['metakeyword']
      );

      $data['pagesview'] =  "success";
      $data['current']   =  0;
      $data['licurrent'] =  -1;

      $this->load->view("website",$data);
    }
   public function sendemail($email_send, $name_contact, $phone, $address, $email, $content, $date) {
   	  $mail             = new PHPMailer();

      $mail->IsSendmail(); // telling the class to use SendMail transport
      $mail->SetFrom($email_send, $name_contact);
      $mail->AddReplyTo($email_send);
      $mail->AddAddress($email, $name_contact);
      $mail->AddCC($email_send);
      $mail->IsHTML(true);
      
      $mail->Subject    = "[".$date."]Contact from website " . base_url();
      $body             ='
      <table border="1" style="border-collapse: collapse; width: 50%;">
        <tr >
            <td colspan="2" style="text-align: center; padding: 5px"><b>Liên hệ từ website</b></td>
        </tr>
        <tr>
            <td style="width: 50%; padding: 5px;"><b>Tên khách hàng</b></td>
            <td style="padding: 5px">'.$name_contact.'</td>
        </tr>
        <tr>
            <td style="width: 50%; padding: 5px"><b>Số điện thoại</b></td>
            <td style="padding: 5px">'.$phone.'</td>
        </tr>
        <tr>
            <td style="width: 50%; padding: 5px"><b>Địa chỉ</b></td>
            <td style="padding: 5px">'.$address.'</td>
        </tr>
        <tr>
            <td style="width: 50%; padding: 5px"><b>Email liên hệ</b></td>
            <td style="padding: 5px">'.$email.'</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><b>Liên hệ</b></td>
        </tr>
        <tr>
            <td style="padding: 5px" colspan="2" align="left">'.$content.'</td>
        </tr>
      </table>
      ';
      
      $mail->MsgHTML($body);


      if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
        redirect('success');
      }

   }

   public function addcart() {

     $cart_item =  array(
         'id'       =>  $this->input->post("id"),
         'qty'      =>  $this->input->post("qty"),
         'name'     =>  $this->input->post("name"),
         'price'    =>  $this->input->post("price")
      );
     $this->cart->insert($cart_item);
      
      $meta         =  $this->website_model->getmetaindex();
      $data         =   $this->getdatawebsite();
      
      $data['meta']      =  array(
         "title"         =>   $meta['title'],
         "description"   =>   $meta['metadescription'],
         "keyword"       =>   $meta['metakeyword']
      );
      $data['cart_items'] =   $this->cart->contents();
      $data['pagesview'] =  "cart";
      $this->load->view("website",$data);
   }
   
   
}