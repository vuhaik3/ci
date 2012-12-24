<div class="content-box-header">
					<h3>Add a new article</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Add a new article</a></li> <!-- href must be unique and match the id of target div -->
                  
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1">
						<form name="f_addnew" action="<?php echo base_url('admin/addnewarticle'); ?>" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Name article</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" />
										<br /><small>Name of article</small>
								</p>
                        <p>
                           <label>Public</label>
                           <input checked="checked" type="radio" name="public" value="1" /> Yes
                           <input type="radio" name="public" value="0" /> No
								</p>
                        <p>
									<label>Hình ảnh</label>
										<input class="text-input small-input" type="file" id="small-input" name="image" />
										
								</p>
								<p>
									<label>Category root folder</label>              
									<select name="cat_pa" class="small-input">
										<option value="0">-- Root --</option>
										<?php
          	                   foreach ($category as $category2) {
          	                      
          	                         echo '<option value="'.$category2['id'].'">'.$category2['name_category'].'</option>';
          	                      
                              } 
          ?>
									</select> 
								</p>
                        
								
								<p>
									<label>Nội dung</label>
									<textarea  class="MyTextarea" id="MyTextarea" name="content" cols="79" rows="15"></textarea>
                </p>
                <p>
                  <label>Price</label>
                  <input class="text-input small-input" type="text" id="small-input" name="price" />

                </p>
                <p>
                  <label>Sale (%)</label>
                  <input class="text-input small-input" type="text" id="small-input" name="sale" />

                </p>
                <p>
                  <label>Made In</label>
                  <input class="text-input small-input" type="text" id="small-input" name="made" />

                </p>
								</p>
                        <p>
									<label>Order</label>
										<input class="text-input small-input" type="text" id="small-input" name="order" />
										
								</p>
                        <p>
									<label>Description</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="description" />
								</p>
								<p>
									<label>Keyword</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="keyword" />
								</p>
                        <p>
									<label>Url</label>
                           
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="url" />
                           <br /><small style="color: #bc0807;">URL sẽ tạo tự động nếu không điền</small>
								</p>
								<p>
									<input onclick="formaddcat()" class="button" type="button" value="Submit" />
								</p>
							</fieldset>
							<div class="clear"></div><!-- End .clear -->
						</form>
					</div> <!-- End #tab2 -->        
				</div> <!-- End .content-box-content -->