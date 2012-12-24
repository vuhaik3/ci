<div class="content-box-header">
					<h3>Edit Banner</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">banner</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
				
					<div class="tab-content default-tab" id="tab1">
						<form name="f_addnew" action=" <?php echo base_url('admin/editbanneraction/'.$idset); ?>" method="post" enctype="multipart/form-data">
                  <?php
                  	foreach ($banner as $banner2) {
               	  ?>
                   
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Name</label>
										<input value="<?php echo $banner2['name']; ?>" class="text-input small-input" type="text" id="small-input" name="name" />
										
								</p>
                        <p>
									<label>Link</label>
										<input value="<?php echo $banner2['link']; ?>" class="text-input small-input" type="text" id="small-input" name="link" />
										
								</p>
								<p>
                           <img src=" <?php echo base_url('public/img/banner/thumb/'.$banner2['image']); ?>" width="200" />
                           <label>Image</label>
                           <input type="file" name="image"  />
                        </p>
								<p>
									<label>Content</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="content" cols="79" rows="15"><?php echo $banner2['content']; ?></textarea>
								</p>
								<p>
									<input onclick="" class="button" type="submit" value="Submit" />
								</p>
							</fieldset>
                      <?php
                   
                   } 
                  ?>
							<div class="clear"></div><!-- End .clear -->
						</form>
					</div> <!-- End #tab2 -->        
				</div> <!-- End .content-box-content -->