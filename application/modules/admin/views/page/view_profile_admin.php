<?php
   if($_SESSION['usertype']!='administrator'){
         $disable    =  "disabled='on'";
         if($idset!=$_SESSION['admin_id'])
         {
            redirect('admin/profile'.$_SESSION['admin_id']);
         }
      }
      else{
         $disable    =  "";
      }
?>
<div class="content-box-header">
					<h3> <?php echo $_SESSION['usertype']; ?></h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Admin</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1">
						<form name="f_addnew" action="<?php echo base_url('admin/editaction'.$idset); ?>" method="post">
                  <?php
                  	foreach ($admin as $admin2) {
                   ?>
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Name</label>
										<input value="<?php echo $admin2['name']; ?>" class="text-input small-input" type="text" id="small-input" name="name" />
										<br /><small>Hãy điền tên của category</small>
								</p>
                        <p>
									<label>Username</label>
										<input <?php echo $disable; ?> value="<?php echo $admin2['username']; ?>" class="text-input small-input" type="text" id="small-input" name="username" />
								</p>
                        <p>
									<label>Email</label>
										<input value="<?php echo $admin2['email']; ?>" class="text-input small-input" type="text" id="small-input" name="email" />
								</p>
                        <p>
									<label>User type</label>
									<select <?php echo $disable; ?> name="usertype" class="small-input">
										<option <?php if($admin2['usertype']=='administrator'){echo "selected='selected'";} ?> value="administrator">Administrator</option>
                              <option <?php if($admin2['usertype']=='member'){echo "selected='selected'";} ?> value="member">Member</option>
									<select>
								</p>
								<p>
									<input onclick="formaddadmin()" class="button" type="button" value="Save" />
								</p>
							</fieldset>
                     <?php
                   }
                  ?>
							<div class="clear"></div><!-- End .clear -->
						</form>
					</div> <!-- End #tab2 -->
				</div> <!-- End .content-box-content -->