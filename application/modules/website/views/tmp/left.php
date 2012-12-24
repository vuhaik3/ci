<div id="left">
<?php
	foreach ($session as $item) {
	  
	  echo '<div class="category">
            	  <ul class="ul2">';
         foreach ($category as $itemcat) {
            if($licurrent==$itemcat['id']){
               $display    =  "licurrent";
            }
            else{
               $display    =  "";
            }
            if($itemcat['cat_parent']==$item['id']){
               
               echo '<li class="li2 '.$display.'"><a href="'.base_url($itemcat['id']."/".$itemcat['url']).'">'.$itemcat['name_category'].'</a></li>';
            }
         }
      echo '</ul>
            </div><!-- category -->';
 } 
?>
            <div class="support">
              <?php
                foreach($support as $support_item){
                  if($support_item['type'] == 'yahoo'){
                    ?>
                      <a href="ymsgr:sendIM?<?php echo $support_item['nickname']; ?>"><img src="http://opi.yahoo.com/online?u=<?php echo $support_item['nickname']; ?>&amp;m=g&amp;t=2" border="0" /><br><?php echo $support_item['name']; ?></a>
                    <?php
                  }
                  if($support_item['type'] == 'skype'){
                    ?>
                    <script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
                    <a id="online_nick_name" href="skype:<?php echo $support_item['nickname']; ?>?chat"><img src="http://mystatus.skype.com/smallclassic/<?php echo $support_item['nickname']; ?>" /><br/><?php echo $support_item['name']; ?></a>
                    <?php
                  }
                }

              ?>
            </div><!-- support -->
            
            <?php
            	foreach ($pr as $item) {
                  echo '<div class="pr">
                        <div class="headpr">'.$item['name_pages'].' </div><!-- headpr -->
                        <div class="contentpr">'.$item['content'].'</div></div>';
                  } 
            ?>
            
         </div><!-- left -->