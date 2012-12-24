<div id="special">
          	 <div id="special_top">
            	<h1>Sản phẩm mới</h1>
               <form action="#" method="post">
                  <input type="text" name="search" class="search" />
                  <input type="button" name="bottom" class="bottom" value="" />
               </form>
            </div><!-- special_top -->
            <div id="special_content">
            <?php
           	   foreach ($special as $item) {
           	      foreach ($category as $cat) {
                     if($cat['id'] == $item['cat_id']){
                           $name_parent = $cat['url'];                     
                        }
                  }
               echo '<div class="product">
             	    <div class="boximg">
                  	<a href="'.base_url($name_parent."/".$item['url']."_".$item['id']).'"><img src="'.base_url("public/img/product/images/".$item['image']).'" class="special_img" /></a>
                  </div><!-- box image -->
                  <a href="'.base_url($name_parent."/".$item['url']."_".$item['id']).'" class="nameproduct">'.$item['name_article'].'</a>
                     </div>';
             } 
            ?>
            </div>
          </div><!-- special -->