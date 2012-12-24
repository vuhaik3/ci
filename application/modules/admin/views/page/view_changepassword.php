<?php
   if($_SESSION['usertype']!='administrator'){
         $disable    =  "disabled='on'";
         if($idset!=$_SESSION['admin_id'])
         {
            redirect('admin/changepassword'.$_SESSION['admin_id']);
         }
      }
      else{
         $disable    =  "";
      }
?>
<div class="content-box-header">
					<h3> Change password account:  <?php echo $_SESSION['name']; ?></h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Admin</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1">
						<form name="f_addnew" action="<?php echo base_url('admin/changepassaction'.$idset); ?>" method="post">
                  
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                        <?php
                        	if(isset($_SESSION['change'])){
                        	  if($_SESSION['change']=='ok'){
                        	    echo '<p style="color:green">Change password sucess!</p>';
                                 $_SESSION['change']  = False;
                        	  }
                             if($_SESSION['change']=='no')
                        	  {
                        	     echo '<p style="color:red">your password wrong!</p>';
                                $_SESSION['change']   = false; 
                        	  }
                        	} 
                        ?>
								<p>
									<label>Enter your Password</label>
										<input class="text-input small-input" type="password" id="pass_o" name="o_pass" />
										
								</p>
                        <p>
									<label>Enter your new Password</label>
										<input class="text-input small-input" type="password" id="small-input" name="n_pass" />
										
								</p>
                        <p>
									<label>Enter your new Password again</label>
										<input class="text-input small-input" type="password" id="small-input" name="r_pass" />
										
								</p>
								<p>
									<input onclick="changepass()" class="button" type="button" value="Change" />
								</p>
							</fieldset>
							<div class="clear"></div><!-- End .clear -->
						</form>
					</div> <!-- End #tab2 -->
				</div> <!-- End .content-box-content -->