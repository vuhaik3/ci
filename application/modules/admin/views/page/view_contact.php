<div class="content-box-header">
					<h3>View Contact</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">contact</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
                  <form action=" <?php echo base_url("admin/deleteall/contact/contact"); ?>" method="post">
						<table>
							<thead>
								<tr>
								   <th style="width: 1%;"><input class="check-all" type="checkbox" /></th>
                           <th style="width: 1%;">STT</th>
                           <th style="width: 5%;">Date</th>
								   <th style="width: 12%;">Name</th>
                           <th style="width: 1%;">Phone</th>
                           <th style="width: 30%;">Content</th>
                           <th style="width: 10%;">Email</th>
								   
								   <th style="width: 1%;">Action</th>
                           
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td colspan="6">
										
										<?php
                                 $this->load->view("tmp/action");
          	                      $this->load->view("tmp/paging"); 
          ?>
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
							<tbody>
                     <?php
                     $stt=$page;
                     	foreach ($contact as $contact2) {
                     	  $stt=$stt+1;
                     	  
                        echo '<tr>
									<td><input type="checkbox" name="del_'.$contact2['id'].'" /></td>
                           <td>'.$stt.'</td>
                           <td>'.$contact2['date'].'</td>
									<td><b style="color:#bc0807;">'.$contact2['name'].'</b></td>
                           <td>'.$contact2['phone'].'</td>
                           <td>'.$contact2['content'].'</td>
                           <td><a href="mailto:'.$contact2['email'].'">'.$contact2['email'].'</a></td>
                           
									<td>
										<!-- Icons -->
										 
										 <a onclick="return comfirm_delete()" href="'.base_url("admin/delaction-contact-".$contact2['id']."-view-contact").'" title="Delete"><img src="'.base_url("public/img/images/icons/cross.png").'" alt="Delete" /></a>
										 
									</td>
                           
								</tr>';
                        
                        
                      }
                     ?>
							</tbody>
						</table>
                  </form>
					</div> <!-- End #tab1 -->
</div>