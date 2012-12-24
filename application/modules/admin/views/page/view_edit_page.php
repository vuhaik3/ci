<div class="content-box-header">
					<h3>Pages</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Pages</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1">
						<form name="f_addnew" action=" <?php echo base_url('admin/editpages/'.$idset); ?>" method="post" enctype="multipart/form-data">
                  <?php
                  	foreach ($pages as $pages2) {
                  ?>
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Tên trang</label>
										<input value="<?php echo $pages2['name_pages']; ?>" class="text-input small-input" type="text" id="small-input" name="name" />
								</p>
                        <p>
                           <label>Public</label>
                           <input <?php if($pages2['public'])echo "checked='checked'"; ?> type="radio" name="public" value="1" /> Yes
                           <input <?php if(!$pages2['public'])echo "checked='checked'"; ?> type="radio" name="public" value="0" /> No
								</p>
									<label>Loại trang</label>              
									<select name="type" class="small-input">
										<option <?php if($pages2['type']=='disable'){echo "selected='selected'";} ?> value="disable">Disable</option>
                              <option <?php if($pages2['type']=='intro'){echo "selected='selected'";} ?>  value="intro">Intro</option>
                              <option <?php if($pages2['type']=='news'){echo "selected='selected'";} ?>  value="news">News</option>
                              <option <?php if($pages2['type']=='contact'){echo "selected='selected'";} ?>  value="contact">Contact</option>
									</select> 
								</p>
                        <p>
									<label>Vị trí</label>              
									<select name="position" class="small-input">
										<option <?php if($pages2['position']=='main-menu'){echo "selected='selected'";} ?> value="main-menu">Main-menu</option>
                              <option <?php if($pages2['position']=='left'){echo "selected='selected'";} ?>  value="left">Left</option>
                              <option <?php if($pages2['position']=='right'){echo "selected='selected'";} ?>  value="right">Right</option>
                              <option <?php if($pages2['position']=='footer'){echo "selected='selected'";} ?>  value="footer">footer</option>
                              <option <?php if($pages2['position']=='question'){echo "selected='selected'";} ?>  value="question">Question</option>
                              <option <?php if($pages2['position']=='user2'){echo "selected='selected'";} ?>  value="user2">User2</option>
									</select> 
								</p>
								<p>
									<label>Mô tả</label>
									<textarea class="text-input" id="MyTextarea" name="content" cols="79" rows="15"><?php echo $pages2['content'] ?></textarea>
								</p>
                        <p>
									<label>Sắp xếp</label>
										<input value="<?php echo $pages2['order']; ?>" class="text-input small-input" type="text" id="small-input" name="order" />
								</p>
                        <p>
									<label>Description</label>
									<input value="<?php echo $pages2['description']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="description" />
								</p>
								<p>
									<label>Keyword</label>
									<input value="<?php echo $pages2['keyword']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="keyword" />
								</p>
                        <p>
									<label>Url</label>
										<input value="<?php echo $pages2['url']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="url" />
								</p>
								<p>
									<input onclick="return formaddcat()" class="button" type="button" value="Submit" />
								</p>
							</fieldset>
                     <?php 
                   } 
                  ?>
							<div class="clear"></div><!-- End .clear -->
						</form>
					</div> <!-- End #tab2 -->        
				</div> <!-- End .content-box-content -->