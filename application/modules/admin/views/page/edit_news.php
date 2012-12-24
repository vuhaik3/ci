<div class="content-box-header">
					<h3>Edit news</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Edit news</a></li> <!-- href must be unique and match the id of target div -->
                  
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					
               <div class="tab-content default-tab" id="tab1">
						<form name="f_addnew" action="<?php echo base_url('admin/editnewsaction/'.$idset); ?>" method="post" enctype="multipart/form-data">
                  <?php
                  	foreach ($news as $news2) {
                   ?>
                   
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Tiêu đề tin tức</label>
										<input value="<?php echo $news2['name_news'] ?>" class="text-input small-input" type="text" id="small-input" name="name" />
										
								</p>
                        <p>
                           <label>Public</label>
                           <input <?php if($news2['public'])echo "checked='checked'"; ?> type="radio" name="public" value="1" /> Yes
                           <input <?php if(!$news2['public'])echo "checked='checked'"; ?> type="radio" name="public" value="0" /> No
								</p>
                        <p>
                           <img src="<?php echo base_url('public/img/news/thumb/'.$news2['image']); ?>" width="200" />
                        </p>
                        <p>
									<label>Hình ảnh đại diện</label>
										<input class="text-input small-input" type="file" id="small-input" name="image" />
										
								</p>
								<p>
									<label>Lựa chọn trang hiển thị</label>              
									<select name="cat_pa" class="small-input">
										<option value="0">-- Root --</option>
										<?php
          	                   foreach ($pages as $page2) {
          	                      if($page2['id']==$news2['page_id'])
                                  {
                                    $select     =  "selected='selected'";
                                    
                                  }
                                  else{
                                    $select     =  "";
                                  }
          	                      if($page2['type']=='news'){
          	                         echo '<option '.$select.' value="'.$page2['id'].'">'.$page2['name_pages'].'</option>';
          	                      }
                              } 
          ?>
									</select> 
								</p>
                        
								<p>
									<label>Nội dung</label>
									<textarea  id="MyTextarea" name="content" cols="79" rows="15"><?php echo $news2['content'] ?></textarea>
								</p>
                        <p>
									<label>Sắp xếp (Hãy điền số)</label>
										<input value="<?php echo $news2['order']; ?>" class="text-input small-input" type="text" id="small-input" name="order" />
										
								</p>
								<p>
									<label>Description</label>
									<input value="<?php echo $news2['description'] ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="description" />
								</p>
								<p>
									<label>Keyword</label>
									<input value="<?php echo $news2['keyword'] ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="keyword" />
								</p>
                        <p>
									<label>Url</label>
                           
									<input  value="<?php echo $news2['url'] ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="url" />
                           <br /><small style="color: #bc0807;">URL sẽ tạo tự động nếu không điền</small>
								</p>
								<p>
									<input onclick="formaddcat()" class="button" type="button" value="Submit" />
								</p>
							</fieldset>
                     <?php
                   } 
                  ?>
							<div class="clear"></div><!-- End .clear -->
						</form>
					</div> <!-- End #tab2 -->  
</div>