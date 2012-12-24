<div class="content-box-header">
					
					<h3>Online support</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Edit</a></li> <!-- href must be unique and match the id of target div -->
						
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
				
					
					<div class="tab-content default-tab" id="tab1">
					
						<form name="f_addnew" action="<?php echo base_url('admin/editsupportaction'.$idset); ?>" method="post">
							<?php
       	             foreach ($nick as $nick2) {
                     ?>
                     
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Name</label>
										<input value="<?php echo $nick2['name']; ?>" class="text-input small-input" type="text" id="small-input" name="name" />
										
								</p>
                        <p>
									<label>Nick name / Phone number</label>
										<input value="<?php echo $nick2['nickname']; ?>" class="text-input small-input" type="text" id="small-input" name="nickname" /> 
										
								</p>
								
								
								
								<p>
									<label>Type ( Yahoo/Skype)</label>              
									<select name="type" class="small-input">
										<option <?php if($nick2['type']=='yahoo'){echo "selected='selected'";} ?> value="yahoo">Yahoo</option>
										<option <?php if($nick2['type']=='skype'){echo "selected='selected'";} ?> value="skype">Skype</option>
                              <option <?php if($nick2['type']=='hotline'){echo "selected='selected'";} ?> value="hotline">Hotline</option>
									</select> 
								</p>
							
								<p>
									<input onclick="support()"  class="button" type="button" value="Submit" />
								</p>
								
							</fieldset>
							<?php
                     } 
       ?>
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->