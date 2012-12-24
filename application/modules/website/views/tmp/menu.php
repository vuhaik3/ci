<div id="menu">
      	<ul class="ul1">
          	<li class="li1 <?php if($current==-1){echo "current";} ?>"><a href=" <?php echo base_url(); ?>">Trang chủ</a></li>
            <?php
            	foreach ($menu as $item) {
          	   if($current==$item['id']){
          	    $display   =   "current";
          	   }
               else{
                  $display =  "";
               }
               echo '<li class="li1 '.$display.'"><a href="'.base_url($item['type']."/".$item['id']."/".$item['url']).'">'.$item['name_pages'].'</a></li>';
             } 
            ?>
         </ul>
      </div><!-- menu -->