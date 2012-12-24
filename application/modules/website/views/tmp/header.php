<div id="header">
    	    <div id="logo">
         	<a href="#">homepage</a>
         </div><!-- logo -->
         <p class="hotline">Hotline :<?php
         
          foreach ($support as $item) {
                if($item['type']=="hotline"){echo $item['name'].'- '.$item['nickname']." ";}
          } ?></p>
      </div><!-- header -->
      