<div id="special">
          	 <div id="special_top">
            	<h1><?php echo $meta['title']; ?></h1>
               <form action="#" method="post">
                  <input type="text" name="search" class="search" />
                  <input type="button" name="bottom" class="bottom" value="" />
               </form>
            </div><!-- special_top -->
            <div id="special_content">
            <?php
               foreach ($category as $cat) {
                  if($cat['id'] == $licurrent){
                     $urlcat = $cat['url'];
                  }
               }
            	foreach ($product as $item) {
               echo '<div class="product">
             	    <div class="boximg">
                  	<a href="'.base_url($urlcat."/".$item['url']."_".$item['id']).'"><img src="'.base_url("public/img/product/images/".$item['image']).'" class="special_img" /></a>
                  </div><!-- box image -->
                  <a href="'.base_url($urlcat."/".$item['url']."_".$item['id']).'" class="nameproduct">'.$item['name_article'].'</a>
                     </div>';
             } 
            ?>
            </div>
          </div><!-- special -->