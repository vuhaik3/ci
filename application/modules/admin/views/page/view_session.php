<div class="content-box-header">
					<h3>Chủ đề</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Chủ đề</a></li> <!-- href must be unique and match the id of target div -->
                  <li><a href="#tab2">Tạo 1 chủ đề mới</a></li>
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
                  <form action=" <?php echo base_url("admin/deleteall/session/session"); ?>" method="post">
						<table>
							<thead>
								<tr>
								   <th style="width: 1%;"><input class="check-all" type="checkbox" /></th>
                           <th style="width: 1%;">STT</th>
								   <th style="width: 15%;">Chủ đề</th>
								   <th style="width: 1%;">Public</th>
                           <th style="width: 5%;">Sắp xếp</th>
                           <th style="width: 5%;">Vị trí</th>
								   <th style="width: 10%;">Action</th>
                           <th style="width: 1%;">ID</th>
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
                     	foreach ($session as $session2) {
                     	  $stt++;
                          if($session2['public']){
                              $public  =  '<img src="'.base_url('public/css/images/icons/tick_circle.png').'" alt="icon" />';
                          }
                          else{
                              $public  =  '<img src="'.base_url('public/css/images/icons/cross_circle.png').'" alt="icon" />';
                          }
                        echo '<tr>
                           
									<td><input type="checkbox" name="del_'.$session2['id'].'" /></td>
                           <td>'.$stt.'</td>
									<td><a href="'.base_url('admin/editsess'.$session2['id']).'" title="Edit">'.$session2['name_session'].'</a></td>
									<td><a href="'.base_url("admin/changepublic/session-".$session2['id']).'-'.$session2['public'].'-'.$page.'">'.$public.'</a></td>
                           <td><input name="order_'.$session2['id'].'" type="text" style="text-align:center;width:25px;" value="'.$session2['order'].'"/></td>
                           <td>'.$session2['position'].'</td>
									<td>
										<!-- Icons -->
										 <a href="'.base_url('admin/editsess'.$session2['id']).'" title="Edit"><img src="'.base_url("public/img/images/icons/pencil.png").'" alt="Edit" /></a>
										 <a onclick="return comfirm_delete()" href="'.base_url("admin/delaction-session-".$session2['id']."-view-session").'" title="Delete"><img src="'.base_url("public/img/images/icons/cross.png").'" alt="Delete" /></a>
										 
									</td>
                           <td>'.$session2['id'].'</td>
                           
								</tr>';
                      
                      }
                     ?>
							</tbody>
						</table>
                  </form>
					</div> <!-- End #tab1 -->
               <div class="tab-content" id="tab2">
					
						<form name="f_addnew" action="<?php echo base_url('admin/addnewsession'); ?>" method="post">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Chủ đề mới</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" />
										<br /><small>Hãy điền chủ đề mới</small>
								</p>
                        <p>
									<label>Vị trí</label>              
									<select style="width: 100px;" name="position" class="">
                              <option value="main-menu">Main-menu</option>
                              <option value="left">Left</option>
                              <option value="right">Right</option>
                              <option value="footer">footer</option>
                              <option value="user2">user2</option>
                              <option value="question">Question</option>
                            </select>
                        <p>
                        <p>
                           <label>Public</label>
                           <input checked="checked" type="radio" name="public" value="1" /> Yes
                           <input type="radio" name="public" value="0" /> No
								</p>
								
								<p>
									<label>Mô Tả</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="intro" cols="79" rows="15"></textarea>
								</p>
                        
                        <p>
									<label>Sắp xếp (Hãy điền số)</label>
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
</div>