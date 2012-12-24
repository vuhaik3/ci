<div class="content-box-header">
					<h3>Content box</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1">
						<form name="f_addnew" action="<?php echo base_url('admin/edicataction'.$idset); ?>" method="post">
                  <?php
                  	foreach ($cat as $cat2) {
                   ?>
                   
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Tên chủ đề con</label>
										<input value="<?php echo $cat2['name_category']; ?>" class="text-input small-input" type="text" id="small-input" name="name" />
										
								</p>
                        <p>
                           <label>Public</label>
                           <input <?php if($cat2['public']) echo 'checked="checked"'; ?>  type="radio" name="public" value="1" /> Yes
                           <input <?php if(!$cat2['public']) echo 'checked="checked"'; ?> type="radio" name="public" value="0" /> No
								</p>
								<p>
									<label>Lựa chọn chủ đề</label>              
									<select name="cat_pa" class="small-input">
										<option value="0">-- Root --</option>
										<?php
          	                   foreach ($session as $session2) {
          	                   
          	                         ?><option <?php if($cat2['cat_parent']==$session2['id']){echo "selected='selected'";} ?> value="<?php echo $session2['id']; ?>"><?php echo $session2['name_session']; ?></option><?php
          	                      
                              } 
          ?>
									</select> 
								</p>
                        
								<p>
									<label>Mô Tả</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="intro" cols="79" rows="15"><?php echo $cat2['intro']; ?></textarea>
								</p>
                        <p>
									<label>Sắp xếp ( Hãy điền số )</label>
										<input value="<?php echo $cat2['order']; ?>" class="text-input small-input" type="text" id="small-input" name="order" />
										
								</p>
								<p>
									<label>Description</label>
									<input value="<?php echo $cat2['description']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="description" />
								</p>
								<p>
									<label>Keyword</label>
									<input value="<?php echo $cat2['keyword']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="keyword" />
								</p>
                        <p>
									<label>Url</label>
                           
                           
									<input value="<?php echo $cat2['url']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="url" />
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
				</div> <!-- End .content-box-content -->