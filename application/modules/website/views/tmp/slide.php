<div id="slide">
          	    <div id="container">
<!------------------------------------- THE CONTENT ------------------------------------------------->
<div id="jslidernews1" class="lof-slidecontent" style="width:720px; height:270px;">
	<div class="preload"><div></div></div>
    		 <div  class="button-previous">Previous</div>
              <div  class="button-next">Next</div>
    		 <!-- MAIN CONTENT --> 
              <div class="main-slider-content" style="width:720px; height:270px;">
              <?php
              echo '<ul class="sliders-wrap-inner">';              
              	foreach ($banner as $item) {
               echo '
                  <li>
                            <img src="'.base_url("public/img/banner/images/".$item['image']).'" >           
                          <div class="slider-description">
                           
                         </div>
                    </li> 
               ';
               }
               echo '</ul> '; 
              ?>
                
            </div>
 		   <!-- END MAIN CONTENT --> 
           <!-- NAVIGATOR -->
           	<div class="navigator-content">
                  <div class="button-control"><span></span></div>	
                  <div class="navigator-wrapper">
                        <ul class="navigator-wrap-inner">
                        <?php
                        	$count=count($banner);
                           for ($i=1;$i<=$count;$i++) {
                           echo '<li><span>'.$i.'</span></li>';
                           } 
                        ?>       		
                        </ul>
                  </div>
                
             </div> 
          <!----------------- END OF NAVIGATOR --------------------->
 </div> 

    </div>
          </div><!-- slide -->