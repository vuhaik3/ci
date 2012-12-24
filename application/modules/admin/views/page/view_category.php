<div class="content-box-header">
					<h3>Chủ đề con</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Category</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
                  <form action=" <?php echo base_url("admin/deleteall/category/category"); ?>" method="post">
						<table>
							<thead>
								<tr>
								   <th style="width: 1%;"><input class="check-all" type="checkbox" /></th>
                           <th style="width: 1%;">STT</th>
								   <th style="width: 15%;">Chủ đề con</th>
                           <th style="width: 1%;">Public</th>
                           <th style="width: 5%;">Sắp xếp</th>
								   <th style="width: 20%;">Thuộc chủ đề</th>
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
                     	foreach ($category as $category2) {
                     	  foreach($session as $session2){
                     	     if($category2['cat_parent']==$session2['id']){
                     	        $name_root  =  $session2['name_session'];
                     	     }
                             else{
                                 $name_root =  "--Root--";
                             }
                     	  }
                          
                           if($category2['public']){
                              $public  =  '<img src="'.base_url('public/css/images/icons/tick_circle.png').'" alt="icon" />';
                          }
                          else{
                              $public  =  '<img src="'.base_url('public/css/images/icons/cross_circle.png').'" alt="icon" />';
                          }
                           $stt++;
                        echo '<tr>
									<td><input type="checkbox" name="del_'.$category2['id'].'" /></td>
                           <td>'.$stt.'</td>
									<td><a href="'.base_url('admin/editcat'.$category2['id']).'" title="Edit">'.$category2['name_category'].'</a></td>
                           <td><a href="'.base_url("admin/changepublic/category-".$category2['id']).'-'.$category2['public'].'-'.$page.'">'.$public.'</a></td>
                           <td><input name="order_'.$category2['id'].'" type="text" style="text-align:center;width:25px;" value="'.$category2['order'].'"/></td>
									<td><a href="#" title="title">'.$name_root.'</a></td>
									<td>
										<!-- Icons -->
										 <a href="'.base_url('admin/editcat'.$category2['id']).'" title="Edit"><img src="'.base_url("public/img/images/icons/pencil.png").'" alt="Edit" /></a>
										 <a onclick="return comfirm_delete()" href="'.base_url("admin/delaction-category-".$category2['id']."-view-category").'" title="Delete"><img src="'.base_url("public/img/images/icons/cross.png").'" alt="Delete" /></a>
										 
									</td>
                           <td>'.$category2['id'].'</td>
								</tr>';
                      
                      }
                     ?>
							</tbody>
						</table>
                  </form>
					</div> <!-- End #tab1 -->
</div>