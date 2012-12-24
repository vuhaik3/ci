<?php
	if(!isset($sidebar) and !isset($sidebar_menu)){
	  $sidebar=1;
     $sidebar_menu=11;
	} 
?>
<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
			<!-- Logo (221px wide) -->
			<a target="_blank" href="http://thietkewebstars.com/"><img id="logo" src="<?php echo base_url("public/img/images"); ?>/logo.png" alt="Simpla Admin logo" /></a>
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Xin chào <a href="<?php echo base_url('admin/profile'); ?>" title="Edit your profile"> <?php echo $_SESSION['name']; ?></a><br />
				<br />
				<a target="_blank" href="<?php echo base_url(); ?>" title="View the Site">Website của bạn</a> | <a href="<?php echo base_url('admin/logout'); ?>" title="Sign Out">Thoát</a>
			</div>        
			<ul id="main-nav">  <!-- Accordion Menu -->
				<li>
					<a <?php if($sidebar==1){echo 'class="nav-top-item current"';} else{echo 'class="nav-top-item"';} ?> href="#" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Cấu hình
					</a>
               <ul>
                  <li><a <?php if($sidebar_menu==11){echo 'class="current"';} ?>   href="<?php echo base_url('admin/dashboard'); ?>">Cấu hình website</a></li>
                  <li><a <?php if($sidebar_menu==12){echo 'class="current"';} ?>   href="<?php echo base_url('admin/view-support'); ?>">Hỗ trợ trực tuyến</a></li>
                  <li><a <?php if($sidebar_menu==13){echo 'class="current"';} ?>   href="<?php echo base_url('admin/view-banner'); ?>">Hình ảnh banner</a></li>
               </ul>       
				</li>
            <li>
					<a <?php if($sidebar==5){echo 'class="nav-top-item current"';} else{echo 'class="nav-top-item"';} ?> href="#" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Trang chính & Tin tức
					</a>
               <ul>
                  <li><a <?php if($sidebar_menu==51){echo 'class="current"';} ?>   href="<?php echo base_url('admin/view-pages'); ?>">Quản lý trang tin</a></li>
                  <li><a <?php if($sidebar_menu==52){echo 'class="current"';} ?>   href="<?php echo base_url('admin/view-news'); ?>">Quản lý tin tức</a></li>
               </ul>       
				</li>
				<li> 
					<a href="#" <?php if($sidebar==2){echo 'class="nav-top-item current"';} else{echo 'class="nav-top-item"';} ?> > <!-- Add the class "current" to current menu item -->
					Chủ đề & chủ đề con
					</a>
					<ul>
						<li><a <?php if($sidebar_menu==21){echo 'class="current"';} ?>  href="<?php echo base_url('admin/view-session'); ?>">Quản lý chủ đề</a></li>
						<li><a <?php if($sidebar_menu==22){echo 'class="current"';} ?>  href="<?php echo base_url('admin/view-category'); ?>">Quản lý chủ đề con</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a <?php if($sidebar_menu==23){echo 'class="current"';} ?>  href="<?php echo base_url('admin/add-new-cat'); ?>">Thêm chủ đề con mới</a></li>
					</ul>
				</li>
				<li>
					<a href="#" <?php if($sidebar==3){echo 'class="nav-top-item current"';} else{echo 'class="nav-top-item"';} ?>>
						Sản phẩm
					</a>
					<ul>
						<li><a <?php if($sidebar_menu==31){echo 'class="current"';} ?>  href="<?php echo base_url('admin/view-article'); ?>">Quản lý sản phẩm</a></li>
						<li><a <?php if($sidebar_menu==32){echo 'class="current"';} ?>  href="<?php echo base_url('admin/add-new-article'); ?>">Thêm sản phẩm mới</a></li>
					</ul>
				</li>
            <li>
					<a href="#" <?php if($sidebar==6){echo 'class="nav-top-item current"';} else{echo 'class="nav-top-item"';} ?>>
						Liên hệ
					</a>
					<ul>
						<li><a <?php if($sidebar_menu==61){echo 'class="current"';} ?>  href="<?php echo base_url('admin/view-contact'); ?>">Xem các liên hệ</a></li>
						
					</ul>
				</li>
            
            <li>
					<a href="#" <?php if($sidebar==4){echo 'class="nav-top-item current"';} else{echo 'class="nav-top-item"';} ?>>
						Administrator
					</a>
					<ul>
						<li><a <?php if($sidebar_menu==41){echo 'class="current"';} ?>  href="<?php echo base_url("admin/profile"); ?>">Profile</a></li>
						<li><a <?php if($sidebar_menu==42){echo 'class="current"';} ?>  href="<?php echo base_url("admin/changepassword"); ?>">Change password</a></li>
                  <?php
                  	if($_SESSION['usertype']=="administrator"){
               	  ?>
                    <li><a <?php if($sidebar_menu==43){echo 'class="current"';} ?>  href="<?php echo base_url("admin/addnewuser"); ?>">Add new user</a></li>
                    <li><a <?php if($sidebar_menu==44){echo 'class="current"';} ?>  href="<?php echo base_url("admin/view-listuser"); ?>">View list user</a></li>
                    <?php
                  	} 
                  ?>
					</ul>
				</li>
				   
			</ul> <!-- End #main-nav -->
         <?php
         	$this->load->view("tmp/about"); 
         ?>
		</div></div> <!-- End #sidebar -->