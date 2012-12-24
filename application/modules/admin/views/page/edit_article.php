<div class="content-box-header">
					<h3>Edit article</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Edit article</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1">
						<form name="f_addnew" action="<?php echo base_url('admin/editarticleaction'.$idset); ?>" method="post" enctype="multipart/form-data">
                  <?php
                  	foreach ($article as $article2) {
                   ?>
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Name Product</label>
										<input value="<?php echo $article2['name_article']; ?>" class="text-input small-input" type="text" id="small-input" name="name" />
										<br /><small>Name of product</small>
								</p>
                        <p>
                           <label>Public</label>
                           <input <?php if($article2['public'])echo "checked='checked'"; ?> type="radio" name="public" value="1" /> Yes
                           <input <?php if(!$article2['public'])echo "checked='checked'"; ?> type="radio" name="public" value="0" /> No
								</p>
                        <p>
                        <?php
                        	if($article2['image']!=''){
                        	  echo '<img width="200" src="'.base_url('public/img/product/thumb/'.$article2['image']).'" />';
                        	} 
                        ?>
									<label>Hình ảnh</label>
										<input class="text-input small-input" type="file" id="small-input" name="image" />
								</p>
								<p>
									<label>Category root folder</label>              
									<select name="cat_pa" class="small-input">
										<option value="0">-- Root --</option>
										<?php
          	                   foreach ($category as $category2) {
          	                      if($category2['cat_parent']!=0){
          	                         if($category2['id']==$article2['cat_id']){
          	                            $select="selected='selected'";
          	                         }
                                     else{
                                       $select="";
                                     }
          	                         echo '<option '.$select.' value="'.$category2['id'].'">'.$category2['name_cat'].'</option>';
          	                      }
                              } 
          ?>
									</select> 
								</p>
                        
								<p>
									<label>Nội dung</label>
									<textarea class="MyTextarea" id="MyTextarea" name="content" cols="79" rows="15"><?php echo $article2['content']; ?></textarea>
								</p>
                <p>
                  <label>Price</label>
                  <input value="<?php echo $article2['price']; ?>"  class="text-input small-input" type="text" id="small-input" name="price" />

                </p>
                <p>
                  <label>Sale (%)</label>
                  <input value="<?php echo $article2['sale']; ?>"  class="text-input small-input" type="text" id="small-input" name="sale" />

                </p>
                <p>
                  <label>Made In</label>
                  <input value="<?php echo $article2['made']; ?>"  class="text-input small-input" type="text" id="small-input" name="made" />

                </p>
                        <p>
									<label>Order</label>
										<input value="<?php echo $article2['order']; ?>" class="text-input small-input" type="text" id="small-input" name="order" />
										
								</p>
								<p>
									<label>Description</label>
									<input value="<?php echo $article2['description']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="description" />
								</p>
								<p>
									<label>Keyword</label>
									<input value="<?php echo $article2['keyword']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="keyword" />
								</p>
                        <p>
									<label>Url</label>
									<input value="<?php echo $article2['url']; ?>" class="text-input medium-input datepicker" type="text" id="medium-input" name="url" />
                           <br /><small style="color: #bc0807;">URL sẽ tạo tự động nếu không điền</small>
								</p>
								<p>
									<input onclick="formaddcat()" class="button" type="button" value="Submit" />
								</p>
							</fieldset>
                     <?php
                   } 
                  ?>
							<div class="clear"></div><!-- End .clear -->
						</form>
					</div> <!-- End #tab2 -->        
				</div> <!-- End .content-box-content -->