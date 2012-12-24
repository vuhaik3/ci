<div class="content-box-header">
					<h3>View user</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">user</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
                  <form action=" <?php echo base_url("admin/deleteall/admin/listuser"); ?>" method="post">
						<table>
							<thead>
								<tr>
								   <th style="width: 1%;"><input class="check-all" type="checkbox" /></th>
                           <th style="width: 1%;">STT</th>
								   <th style="width: 20%;">Name</th>
								   <th style="width: 15%;">Username</th>
								   <th style="width: 25%;">email</th>
								   <th style="width: 25%;">Usertype</th>
								   <th style="width: 10%;">Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="action">
												<option value="option1">Choose an action...</option>
												<option value="delete">Delete</option>
											</select>
											<input type="submit" class="button" value="Apply to selected" />
										</div>
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
							<tbody>
                     <?php
                        $stt=0;
                     	foreach ($admin as $admin2) {
                     	  $stt++;
                        echo '<tr>
									<td><input type="checkbox" name="del_'.$admin2['id'].'" /></td>
                           <td>'.$stt.'</td>
									<td><b>'.$admin2['name'].'</b></td>
									<td>'.$admin2['username'].'</td>
									<td>'.$admin2['email'].'</td>
									<td><b>'.$admin2['usertype'].'</b></td>
									<td>
										<!-- Icons -->
										 <a href="'.base_url('admin/profile'.$admin2['id']).'" title="Edit"><img src="'.base_url("public/img/images/icons/pencil.png").'" alt="Edit" /></a>
										 <a onclick="return comfirm_delete()" href="'.base_url("admin/delaction-admin-".$admin2['id']."-view-listuser").'" title="Delete"><img src="'.base_url("public/img/images/icons/cross.png").'" alt="Delete" /></a>
										 
									</td>
								</tr>';
                      }
                     ?>
							</tbody>
						</table>
                  </form>
					</div> <!-- End #tab1 -->
</div>