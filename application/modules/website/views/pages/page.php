<div id="special">
          	 <div id="special_top">
            	<h1><?php echo $meta['title']; ?></h1>
            </div><!-- special_top -->
            <div id="special_content" class="contentpage">
            
            <?php
            if($type=="contact" or $type=="intro"){
               echo $content['content'];
            }
            foreach ($news as $item) {
               echo '
               <div class="news">
               	<a href="#" class="newsa">'.$item['name_news'].'</a>
                  <p>'.substr(strip_tags($item['content']),0,200).'..</p>
               </div><!-- news -->
               ';
            }
            if($type=="contact"){
               $this->load->view("pages/formcontact");
            }
            ?>
            
            </div>
          </div><!-- special -->