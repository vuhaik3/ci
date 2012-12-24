<div class="content-box-header">
					
					<h3>Online support</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Danh sách</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Thêm mới</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						<table>
							
							<thead>
								<tr>
								   <th style="width: 1%;"><input class="check-all" type="checkbox" /></th>
                           <th style="width: 1%;">STT</th>
								   <th>Tên</th>
								   <th>Nick name</th>
								   <th>Kiểu</th>
								   
								   <th>Action</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										
										
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
                     <?php
                     $stt=0;
                     	foreach($nick as $nick2){
                     	  $stt++;
                  	  ?>
                        <tr>
									<td><input type="checkbox" /></td>
                           <td><?php echo $stt; ?></td>
									<td><a href=" <?php echo base_url('admin/editnickname'.$nick2['id']); ?>" title="Edit"><?php echo $nick2['name']; ?></a></td>
									<td><a href="#" title="title"><?php echo $nick2['nickname']; ?></a></td>
									<td><?php echo $nick2['type']; ?></td>
									
									<td>
										<!-- Icons -->
										 <a href=" <?php echo base_url('admin/editnickname'.$nick2['id']); ?>" title="Edit"><img src="<?php echo base_url("public/img/images"); ?>/icons/pencil.png" alt="Edit" /></a>
										 <a onclick="return comfirm_delete()" href=" <?php echo base_url('admin/delaction-onlinesupport-'.$nick2['id'].'-view-support'); ?>" title="Delete"><img src="<?php echo base_url("public/img/images"); ?>/icons/cross.png" alt="Delete" /></a> 
										 
									</td>
								</tr>
                       <?php
                     	} 
                     ?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
						<form name="f_addnew" action="<?php echo base_url('admin/addnickname'); ?>" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Tên</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" />
										<br /><small>Tên của người hỗ trợ online</small>
								</p>
                        <p>
									<label>Nick name/Số điện thoại</label>
										<input class="text-input small-input" type="text" id="small-input" name="nickname" /> 
										
								</p>
								
								
								
								<p>
									<label>Kiểu hỗ trợ ( Yahoo/Skype/Hotline)</label>              
									<select name="type" class="small-input">
										<option value="yahoo">Yahoo</option>
										<option value="skype">Skype</option>
                              <option value="hotline">Hotline</option>
									</select> 
								</p>
							
								<p>
									<input onclick="support()"  class="button" type="button" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->