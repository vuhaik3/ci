<div class="content-box-header">
					<h3>Dashboard</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">dashboard</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1">
						<form name="f_addnew" action="<?php echo base_url('admin/updatedashboard/1'); ?>" method="post">
                  <?php
                  
                  	foreach ($dashboard as $dashboard2) {
                  	  
                   ?>
                   
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Title website</label>
									<input value="<?php echo $dashboard2['title']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="title" />
								</p>
								<p>
									<label>Meta-Description</label>
									<input value="<?php echo $dashboard2['metadescription']; ?>" class="text-input large-input" type="text" id="large-input" name="description" />
								</p>
                        <p>
									<label>Meta-Keyword</label>
                           
									<input value="<?php echo $dashboard2['metakeyword']; ?>" class="text-input large-input" type="text" id="large-input" name="keyword" />
                           
								</p>
								<p>
									<label>Email nhận tin</label><small style="color: red;">Cách nhau bằng dấu phẩy (,)</small>
									<input value="<?php echo $dashboard2['email']; ?>" class="text-input large-input" type="text" id="large-input" name="email" />
								</p>
								<p>
									<input class="button" type="submit" value="Submit" />
								</p>
							</fieldset>
                     <?php
                   } 
                  ?>
							<div class="clear"></div><!-- End .clear -->
						</form>
					</div> <!-- End #tab2 -->        
				</div> <!-- End .content-box-content -->