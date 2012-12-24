<div class="content-box-header">
					<h3>View list news</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">News</a></li> <!-- href must be unique and match the id of target div -->
                  <li><a href="#tab2">Thêm 1 tin tức mới</a></li>
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
                  <form action=" <?php echo base_url("admin/deleteall/news/news"); ?>" method="post">
						<table>
							<thead>
								<tr>
								   <th style="width: 1%;"><input class="check-all" type="checkbox" /></th>
                           <th style="width: 1%;">STT</th>
								   <th style="width: 20%;">Tiêu đề</th>
                           <th style="width: 1%;">Public</th>
                           <th style="width: 8%;">Sắp xếp</th>
								   <th style="width: 20%;">Tên trang</th>
                           <th style="width: 8%;">Tác giả</th>
                           <th style="width: 8%;">Ngày đăng</th>
								   <th style="width: 5%;">Action</th>
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
                     	foreach ($news as $news2) {
                     	  $stt++;
                     	  foreach($pages as $page2){
                     	     if($page2['id']==$news2['page_id']){
                     	        @$name_root  =  $page2['name_pages'];
                     	     }
                     	  }
                          if($news2['public']){
                              $public  =  '<img src="'.base_url('public/css/images/icons/tick_circle.png').'" alt="icon" />';
                          }
                          else{
                              $public  =  '<img src="'.base_url('public/css/images/icons/cross_circle.png').'" alt="icon" />';
                          }
                        echo '<tr>
									<td><input type="checkbox" name="del_'.$news2['id'].'" /></td>
                           <td>'.$stt.'</td>
									<td><a href="'.base_url('admin/editnews/'.$news2['id']).'" title="Edit">'.$news2['name_news'].'</a></td>
                           <td><a href="'.base_url("admin/changepublic/news-".$news2['id']).'-'.$news2['public'].'-'.$page.'">'.$public.'</a></td>
                           <td><input style="width:20px;text-align:center;" type="text" name="order_'.$news2['id'].'" value="'.$news2['order'].'"/></td>
                           
									<td><a href="#" title="title">'.@$name_root.'</a></td>
                           <td>'.$news2['author'].'</td>
                           <td>'.$news2['date'].'</td>
									<td>
										<!-- Icons -->
										 <a href="'.base_url('admin/editnews/'.$news2['id']).'" title="Edit"><img src="'.base_url("public/img/images/icons/pencil.png").'" alt="Edit" /></a>
										 <a onclick="return comfirm_delete()" href="'.base_url("admin/delaction-news-".$news2['id']."-view-news").'" title="Delete"><img src="'.base_url("public/img/images/icons/cross.png").'" alt="Delete" /></a>
										 
									</td>
                           <td>'.$news2['id'].'</td>
								</tr>';
                      }
                     ?>
							</tbody>
						</table>
                  </form>
					</div> <!-- End #tab1 -->
               <div class="tab-content" id="tab2">
						<form name="f_addnew" action="<?php echo base_url('admin/addnews'); ?>" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Tiêu đề tin mới</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" />
										<br /><small>Hãy điền tiêu đề tin tức</small>
								</p>
                        <p>
                           <label>Public</label>
                           <input checked="checked" type="radio" name="public" value="1" /> Yes
                           <input type="radio" name="public" value="0" /> No
								</p>
                        <p>
									<label>Hình ảnh đại diện</label>
										<input class="text-input small-input" type="file" id="small-input" name="image" />
										
								</p>
								<p>
									<label>Lựa chọn trang hiển thị</label>              
									<select name="cat_pa" class="small-input">
										<option value="0">-- Root --</option>
										<?php
          	                   foreach ($pages as $page2) {
          	                      if($page2['type']=='news'){
          	                         echo '<option value="'.$page2['id'].'">'.$page2['name_page'].'</option>';
          	                      }
                              } 
          ?>
									</select> 
								</p>
                        
								<p>
									<label>Nội dung</label>
									<textarea  id="MyTextarea" name="content" cols="79" rows="15"></textarea>
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