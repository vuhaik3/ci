<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Tool | Vuhaik3@gmailcom | 0918577122</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/invalid.css" type="text/css" media="screen" />	
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/facebox.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.wysiwyg.js"></script>
</head>
  
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="<?php echo base_url(); ?>public/css/images/logo.png" alt="Simpla Admin logo" />
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
				
				<form action="<?php echo base_url('admin/login-action'); ?>" method="post">
				
					<div class="notification information png_bg">
						<div>
							
                     <?php
                        if(!isset($_SESSION['erorr']) || $_SESSION['erorr']==false)
                        {
                           echo "Enter your username and password !";
                        }
                     	else{
                     	  echo '<p style="color:red;">Please try again!</p>';
                          $_SESSION['erorr']=false;
                     	} 
                     ?>
						</div>
					</div>
					
					<p>
						<label>Username</label>
						<input class="text-input" type="text" name="username" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="password" />
					</p>
					
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Sign In" />
					</p>
					
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->

  </body>
</html>
