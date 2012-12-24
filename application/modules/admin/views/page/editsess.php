<div class="content-box-header">
					<h3>Sửa chủ đề</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Sửa chủ đề</a></li> <!-- href must be unique and match the id of target div -->
                  
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
            <div class="content-box-content">
               <div class="tab-content default-tab" id="tab1">
               <form name="f_addnew" action="<?php echo base_url('admin/editactionsess'.$session['id']); ?>" method="post">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Chủ đề</label>
										<input value="<?php echo $session['name_session']; ?>" class="text-input small-input" type="text" id="small-input" name="name" />
										
								</p>
                        <p>
									<label>Vị trí</label>              
									<select style="width: 100px;" name="position" class="">
                              <option <?php if($session['position']=="main-menu") echo 'selected="selected"'; ?> value="main-menu">Main-menu</option>
                              <option <?php if($session['position']=="left") echo 'selected="selected"'; ?> value="left">Left</option>
                              <option <?php if($session['position']=="right") echo 'selected="selected"'; ?> value="right">Right</option>
                              <option <?php if($session['position']=="footer") echo 'selected="selected"'; ?> value="footer">footer</option>
                              <option <?php if($session['position']=="user2") echo 'selected="selected"'; ?> value="user2">user2</option>
                              <option <?php if($session['position']=="question") echo 'selected="selected"'; ?> value="question">Question</option>
                            </select>
                        <p>
                        <p>
                           <label>Public</label>
                           <input <?php if($session['public']) echo 'checked="checked"'; ?>  type="radio" name="public" value="1" /> Yes
                           <input <?php if(!$session['public']) echo 'checked="checked"'; ?> type="radio" name="public" value="0" /> No
								</p>
								
								<p>
									<label>Mô Tả</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="intro" cols="79" rows="15"><?php echo $session['intro']; ?></textarea>
								</p>
                        
                        <p>
									<label>Sắp xếp</label>
										<input value="<?php echo $session['order']; ?>" class="text-input small-input" type="text" id="small-input" name="order" />
										
								</p>
								<p>
									<label>Description</label>
									<input value="<?php echo $session['description']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="description" />
								</p>
								<p>
									<label>Keyword</label>
									<input value="<?php echo $session['keyword']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="keyword" />
								</p>
                        <p>
									<label>Url</label>
                           
									<input value="<?php echo $session['url']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="url" />
                           <br /><small style="color: #bc0807;">URL sẽ tạo tự động nếu không điền</small>
								</p>
								<p>
									<input onclick="formaddcat()" class="button" type="button" value="Submit" />
								</p>
							</fieldset>
							<div class="clear"></div><!-- End .clear -->
						</form>
						
					</div> <!-- End #tab2 --> 
            </div>