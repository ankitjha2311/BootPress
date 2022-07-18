<?php get_header(); ?>
	
			<br>
		<br>
	<div class="row ">
		<div class="col-md-1">
		</div>
		<div class="col-md-10 ">
		
	        <br><br><br>
		
			<div class="row">
		
            <?php  
            
                
			$post_taxos= get_post_taxonomies()[0];
	
       var_dump();

            function college_archive($catogary_name, $catogary_domain)
            {
                
                  
                    $list_query = new WP_Query(array(
                      $catogary_domain => $catogary_name
                                 ));
                                 if($list_query->have_posts()){
                                  
                    ?> 
                         <div class="col-md-4">
                                <div class="list-group" id="deg">
                                     <a href="" class="list-group-item list-group-item-action active border-reset <?php echo $catogary_name; ?>"> <?php echo $catogary_name; ?> </a>
                                    <?php
                                    $i=1;
                                     while ($list_query->have_posts()):
										$list_query->the_post(); 
										
                                         ?>
                                        <div class="card-header">
                                             <a class="card-link" data-toggle="collapse" data-parent="#deg" data-target="#23" href=<?php the_permalink();?>><?php the_title(); echo get_sub_field('recent-notices'); ?></a>
                                        </div>
                                        <div id="23" class="collapse">
                                            <div class="card-body">
                                             
                                               
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
        
	
				
			</div>
		   
            </div>
		

		<div class="col-md-1">
			
		</div>
	</div>

<?php get_footer(); ?>