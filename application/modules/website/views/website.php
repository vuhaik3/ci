<?php
	$this->load->view("tmp/head"); 
?>
<body>
   <div id="wrapper">
   	<?php
    	$this->load->view("tmp/header");
      $this->load->view("tmp/menu"); 
      ?>
      
      
      <div id="main">
      	<?php
       	$this->load->view("tmp/left"); 
       ?>
         <div id="center">
         	<?php
          	$this->load->view("tmp/slide"); 
          ?>
          <p class="marquee"><marquee>Ngọc Anh auto - Chuyên nhập khẩu xe từ Hàn Quốc</marquee></p>
          <?php
          	$this->load->view("pages/".$pagesview);
          ?>
         </div><!-- center -->
      </div><!-- main -->
      <?php
      	$this->load->view("tmp/footer"); 
      ?>
     <div id="backtop" style='display: none'>
       <a href="#">top</a>
     </div>
   </div><!-- wrapper -->
</body>
</html>