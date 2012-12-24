<div class="content-box-header">
					<h3>Banner</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Banner</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Thêm 1 hình ảnh mới</a></li>
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
								   <th>Tên banner</th>
								   <th>Link liên kết</th>
								   <th>Hình ảnh</th>
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
                     	foreach ($banner as $banner2) {
                     	  $stt++;
                     ?>
								<tr>
									<td><input type="checkbox" /></td>
                           <td><?php echo $stt; ?></td>
									<td><a href=" <?php echo base_url('admin/vieweditbanner/'.$banner2['id']); ?>" title="Edit"><?php echo $banner2['name']; ?></a></td>
									<td><a href="#" title="title"><?php echo $banner2['link']; ?></a></td>
									<td><img width="50" src="<?php echo base_url("public/img/banner/thumb/".$banner2['image']); ?>" /></td>
									<td>
										<!-- Icons -->
										 <a href=" <?php echo base_url('admin/vieweditbanner/'.$banner2['id']); ?>" title="Edit"><img src="<?php echo base_url("public/img/images"); ?>/icons/pencil.png" alt="Edit" /></a>
										 <a onclick="return comfirm_delete()" href="<?php echo base_url('admin/delaction-banner-'.$banner2['id'].'-view-banner'); ?>" title="Delete"><img src="<?php echo base_url("public/img/images"); ?>/icons/cross.png" alt="Delete" /></a> 
										 
									</td>
								</tr>
							<?php 
                      } 
                     ?>	
							</tbody>
						</table>
					</div> <!-- End #tab1 -->
					<div class="tab-content" id="tab2">
						<form name="f_addnew" action=" <?php echo base_url('admin/addbanneraction'); ?>" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Tên banner</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" />
										
								</p>
                        <p>
									<label>Link liên kết</label>
										<input class="text-input small-input" type="text" id="small-input" name="link" />
										
								</p>
								<p>
                           <label>Hình ảnh</label>
                           <input type="file" name="image"  />
                        </p>
								<p>
									<label>Mô tả</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="content" cols="79" rows="15"></textarea>
								</p>
								<p>
									<input onclick="if(document.f_addnew.name.value==''){alert('Hãy nhập tên banner');return false;}" class="button" type="submit" value="Submit" />
								</p>
							</fieldset>
							<div class="clear"></div><!-- End .clear -->
						</form>
					</div> <!-- End #tab2 -->        
				</div> <!-- End .content-box-content -->