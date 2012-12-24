<?php
$this->load->view("tmp/head");
?>
<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
<?php
$this->load->view("tmp/sidebar");
?>
<div id="main-content"> <!-- Main Content Section with everything -->
<noscript> <!-- Show a notification if the user has disabled javascript -->
<div class="notification error png_bg">
</div>
</noscript>
<?php
$this->load->view("tmp/pagehead");
?>
<div class="content-box"><!-- Start Content Box -->
<?php
if(isset($tmp)){
$page =  $tmp;
}
else{
$page =  "dashboard";
}
$this->load->view("page/".$page);
?>
</div> <!-- End .content-box -->
<div class="clear"></div>
<div id="footer">
<small> <!-- Remove this notice or replace it with whatever you want -->
&#169; Copyright 2009 Your Company | Powered by <a href="mailto:vuhaik3@gmail.com">vuhaik3</a> | <a href="#">Top</a>
</small>
</div><!-- End #footer -->
</div> <!-- End #main-content -->
</div></body>
</html>