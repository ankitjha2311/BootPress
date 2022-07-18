
            <?php  
            
                
            $post_taxos= get_post_taxonomies()[0];
       

            function college_archive($catogary_name, $catogary_domain)
            {
                
                  
                    $list_query = new WP_Query(array(
                      $catogary_domain => $catogary_name
                                 ));
                                 if($list_query->have_posts()){
                                    
                    ?> 
                         <div class="col-md-4">
                                <div class="list-group" id="<?php echo strtok($catogary_name, " "); ?>">
                                     <a href="#" class="list-group-item list-group-item-action active border-reset <?php echo $catogary_name; ?>"> <?php echo $catogary_name; ?> </a>
                                    <?php
                                    $i=1;
                                     while ($list_query->have_posts()&& $i<13):
                                        $list_query->the_post(); 
                                         ?>
                                        <div class="card-header">
                                             <a class="card-link" data-toggle="collapse" data-parent="#<?php echo strtok($catogary_name, " "); ?>" href="#<?php echo strtok($catogary_name, " ").$i; ?>"><?php the_title(); ?></a>
                                        </div>
                                        <div id="<?php echo strtok($catogary_name, " ").$i; ?>" class="collapse">
                                            <div class="card-body">
                                                <a href="<?php the_permalink()?>"><?php the_field('notice-title'); ?></a>
                                               
                                            </div>
                                        </div>
                                     <?php  $i++; endwhile; ?>	
                                       
                                </div>
                                <br>
                            </div>
                            
                                     <?php 
                                     }		
                
            }
        
            get_its_archive($post_taxos);	
      
              function get_its_archive($its_name){
                $term_names = get_categories( array(
                    'taxonomy' => $its_name,
                    'hide_empty' => false,
                ) );
                
                foreach ($term_names as $term) {
                    $catogar=$term->name;
                    college_archive($catogar,$its_name);
                    
                }
            }
            
         
      

      ?>
        
	