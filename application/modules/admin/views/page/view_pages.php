<div class="content-box-header">
					<h3>Pages</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Pages</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Thêm 1 trang mới</a></li>
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
               <form action=" <?php echo base_url("admin/deleteall/pages/pages"); ?>" method="post">
						<table>
							<thead>
								<tr>
								   <th style="width: 1%;"><input class="check-all" type="checkbox" /></th>
                           <th style="width: 1%;">STT</th>
								   <th style="width: 20%;">Tên trang</th>
								   <th style="width: 7%;">Loại</th>
                           <th style="width: 1%;">Pubic</th>
                           <th>Vị trí</th>
                           <th>Sắp xếp</th>
                           <th>Action</th>
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
                     	foreach ($pages as $page2) {
                     	  $stt++;
                          if($page2['public']){
                              $public  =  '<img src="'.base_url('public/css/images/icons/tick_circle.png').'" alt="icon" />';
                          }
                          else{
                              $public  =  '<img src="'.base_url('public/css/images/icons/cross_circle.png').'" alt="icon" />';
                          }
                     ?>
								<tr>
									<td><input type="checkbox" name="del_<?php echo $page2['id']; ?>" /></td>
                           <td><?php echo $stt; ?></td>
									<td><a href=" <?php echo base_url('admin/vieweditpage/'.$page2['id']); ?>" title="Edit"><?php echo $page2['name_pages']; ?></a></td>
									<td><?php echo $page2['type']; ?></td>
                           <td><a href="<?php echo base_url("admin/changepublic/pages-".$page2['id']).'-'.$page2['public'].'-'.$page; ?>"><?php echo $public; ?></a></td>
                           <td><a href="#" title="<?php echo $page2['position']; ?>"><?php echo $page2['position']; ?></a></td>
                           <td><?php echo "<input type='text' style='width:20px;text-align:center' value='".$page2['order']."' name='order_".$page2['id']."' />"; ?></td>
									<td>
										<!-- Icons -->
										 <a href=" <?php echo base_url('admin/vieweditpage/'.$page2['id']); ?>" title="Edit"><img src="<?php echo base_url("public/img/images"); ?>/icons/pencil.png" alt="Edit" /></a>
										 <a onclick="return comfirm_delete()" href="<?php echo base_url("admin/delaction-pages-".$page2['id']."-view-pages"); ?>" title="Delete"><img src="<?php echo base_url("public/img/images"); ?>/icons/cross.png" alt="Delete" /></a> 
									</td>
                           <td><?php echo $page2['id']; ?></td>
								</tr>
							<?php 
                      } 
                     ?>	
							</tbody>
						</table>
                  </form>
					</div> <!-- End #tab1 -->
					<div class="tab-content" id="tab2">
						<form name="f_addnew" action=" <?php echo base_url('admin/addnewpage'); ?>" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Tên trang</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" />
								</p>
                        <p>
                           <label>Public</label>
                           <input checked="checked" type="radio" name="public" value="1" /> Yes
                           <input type="radio" name="public" value="0" /> No
								</p>
									<label>Loại trang</label>              
									<select name="type" class="small-input">
										<option value="disable">Disable</option>
                              <option value="intro">Intro</option>
                              <option value="news">News</option>
                              <option value="contact">Contact</option>
									</select> 
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
									<label>Mô tả</label>
									<textarea class="text-input" id="MyTextarea" name="content" cols="79" rows="15"></textarea>
								</p>
                        <p>
									<label>Sắp xếp</label>
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
								</p>
								<p>
									<input onclick="return formaddcat()" class="button" type="button" value="Submit" />
								</p>
							</fieldset>
							<div class="clear"></div><!-- End .clear -->
						</form>
					</div> <!-- End #tab2 -->        
				</div> <!-- End .content-box-content -->