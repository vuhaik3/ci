<div id="special">
	<div id="special_top">
	  <h1><?php echo $meta['title']; ?></h1>
   </div><!-- special_top -->
   <div id="special_content" class="contentproduct">
      <div id="header_product">

         
      	<div id="box_image">
          <?php
          if($product['sale'] != 0){
            echo '<div class="sale_percent">
                  -'.$product['sale'].'%
                  </div>';
          }
          ?>
       	    <img src=" <?php echo base_url('public/img/product/images/'.$product['image']); ?>" />
         </div><!-- box image -->
         <div id="form_add_cart">
      	  <form action=" <?php echo base_url('website/addcart'); ?>" method="post" class="form_add">
         	  <div id="name_of_product" class="info_product">
                  <label>Sản Phẩm: </label> <?php echo $product['name_article'] ?>	
              </div>
              <div id="price_product" class="info_product">
              	   <label>Giá Niêm Yết: </label> <?php if($product['price'] == 0) {echo "Thỏa Thuận";}else { echo $product['price']." USD";} ?>
              </div>
              <?php
               if($product['sale'] != 0){
                  $price_sale = $product['price'] - ($product['price']*$product['sale']/100);
                  echo '<div id="price_sale_product" class="info_product">
              	            <label>Giá Khuyến Mãi: </label>'.$price_sale.' USD
                        </div>';
               }
              ?>
              <div id="number" class="info_product">
     	            <label>Số Lượng: </label><input type="text" value="1" name="qty" />
              </div>
              <div id="made_in" class="info_product">
              	   <label>Xuất sứ: </label> <?php echo $product['made']; ?>
              </div>
              <div id="input_hidden">
              	   <input type="hidden" value="<?php echo $product['id'] ?>" name="id" />
                  <input type="hidden" value="<?php echo $product['price'] ?>" name="price" />
                  <input type="hidden" value="<?php echo $product['name_article'] ?>" name="name" />
              </div>
              <div id="submit" class="info_product">
              	   <input type="submit" value="Add to Cart" />
              </div>
           </form>
         </div>
      </div><!-- header product -->
      <div id="infomation_product">
      	<h2 class="title_info">Thông tin chi tiết sản phẩm : <span><?php echo $product['name_article']; ?></span></h2>
         <div class="content_info"><?php echo $product['content']; ?></div>
      </div>
   </div><!-- special top -->
</div><!-- special -->