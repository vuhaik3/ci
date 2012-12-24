<!-- Page Head -->
			<h2><?php echo $_SESSION['name']; ?></h2>
			<p id="page-intro">Chúc bạn có một ngày may mắn !</p>
			
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href=" <?php echo base_url('admin/add-new-article'); ?>"><span>
					<img src="<?php echo base_url("public/img/images"); ?>/icons/pencil_48.png" alt="icon" /><br />
					Thêm 1 sản phẩm mới
				</span></a></li>
				
				<li><a class="shortcut-button" href="<?php echo base_url('admin/add-new-cat'); ?>"><span>
					<img src="<?php echo base_url("public/img/images"); ?>/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Thêm 1 chủ đề con
				</span></a></li>
				
				<li><a class="shortcut-button" href="<?php echo base_url('admin/view-pages'); ?>"><span>
					<img src="<?php echo base_url("public/img/images"); ?>/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Quản lý trang tin
				</span></a></li>
				
				<li><a class="shortcut-button" href="<?php echo base_url('admin/view-news'); ?>"><span>
					<img src="<?php echo base_url("public/img/images"); ?>/icons/pencil_48.png" alt="icon" /><br />
					Quản lý tin tức
				</span></a></li>
				
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo base_url("public/img/images"); ?>/icons/comment_48.png" alt="icon" /><br />
					About us
				</span></a></li>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->