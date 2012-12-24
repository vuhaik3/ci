<div class="content-box-header">
					<h3> <?php echo $_SESSION['usertype']; ?></h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Admin</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1">
						<form name="f_addnew" action="<?php echo base_url('admin/adduser'); ?>" method="post">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Name</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" />
										<br /><small>Hãy điền tên của category</small>
								</p>
                        <p>
									<label>Username</label>
										<input class="text-input small-input" type="text" id="small-input" name="username" />
								</p>
                        <p>
									<label>Password</label>
										<input class="text-input small-input" type="password" id="small-input" name="password" />
								</p>
                        <p>
									<label>Email</label>
										<input  class="text-input small-input" type="text" id="small-input" name="email" />
								</p>
                        <p>
									<label>User type</label>
									<select  name="usertype" class="small-input">
                              <option  value="member">Member</option>
										<option  value="administrator">Administrator</option>
                              
									<select>
								</p>
								<p>
									<input onclick="adduser()" class="button" type="button" value="Save" />
								</p>
							</fieldset>

							<div class="clear"></div><!-- End .clear -->
						</form>
					</div> <!-- End #tab2 -->
				</div> <!-- End .content-box-content -->