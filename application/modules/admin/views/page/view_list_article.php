<div class="content-box-header">
					<h3>View article</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">article</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						<div class="notification attention png_bg">
							<a href="#" class="close"><img src="<?php echo base_url("public/css/images/icons/cross_grey_small.png") ?>" title="Close this notification" alt="close" /></a>
							<div>
								<form action="<?php echo base_url("admin/searcharticle"); ?>" method="post">
        	                  Name: <input type="text" name="article_s" /> <input type="submit" value="Lọc" />
                        </form>
							</div>
						</div>
                  <form action=" <?php echo base_url("admin/deleteall/article/article"); ?>" method="post">
						<table>
							<thead>
								<tr>
								   <th style="width: 1%;"><input class="check-all" type="checkbox" /></th>
                           <th style="width: 1%;">STT</th>
								   <th style="width: 15%;">Name</th>
                           <th style="width: 1%;">Public</th>
                           <th style="width: 5%;">Order</th>
								   <th style="width: 15%;">Root</th>
                           <th style="width: 5%;">Author</th>
                           <th style="width: 8%;">Date</th>
								   <th style="width: 2%;">Action</th>
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
                     	foreach ($article as $article2) {
                     	  $stt=$stt+1;
                     	  foreach($category as $category2){
                     	     if($category2['id']==$article2['cat_id'] and $article2['cat_id']!=0){
                     	        @$name_root  =  $category2['name_category'];
                     	     }
                             if($article2['cat_id']==0){
                              @$name_root    =  "--Root--";
                             }
                     	  }
                          if($article2['public']){
                              $public  =  '<img src="'.base_url('public/css/images/icons/tick_circle.png').'" alt="icon" />';
                          }
                          else{
                              $public  =  '<img src="'.base_url('public/css/images/icons/cross_circle.png').'" alt="icon" />';
                          }
                        echo '<tr>
									<td><input type="checkbox" name="del_'.$article2['id'].'" /></td>
                           <td>'.$stt.'</td>
									<td><a href="'.base_url('admin/editarticle'.$article2['id']).'" title="Edit">'.$article2['name_article'].'</a></td>
                           <td><a href="'.base_url("admin/changepublic/article-".$article2['id']).'-'.$article2['public'].'-'.$page.'">'.$public.'</a></td>
                           <td><input name="order_'.$article2['id'].'" type="text" style="text-align:center;width:25px;" value="'.$article2['order'].'"/></td>
									
                           
									<td><a href="#" title="title">'.@$name_root.'</a></td>
									<td>'.$article2['author'].'</td>
                           <td>'.$article2['date'].'</td>
									<td>
										<!-- Icons -->
										 <a href="'.base_url('admin/editarticle'.$article2['id']).'" title="Edit"><img src="'.base_url("public/img/images/icons/pencil.png").'" alt="Edit" /></a>
										 <a onclick="return comfirm_delete()" href="'.base_url("admin/del_article/".$article2['id']).'" title="Delete"><img src="'.base_url("public/img/images/icons/cross.png").'" alt="Delete" /></a>
										 
									</td>
                           <td>'.$article2['id'].'</td>
								</tr>';
                        
                        
                      }
                     ?>
							</tbody>
						</table>
                  </form>
					</div> <!-- End #tab1 -->
</div>