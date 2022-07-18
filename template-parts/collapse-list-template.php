<?php 
function custom_list($array)
{
    foreach ($array as $catogary) {
        $list_query = new WP_Query(array(
                     'category_name' => $catogary
					 ));
					 if($list_query->have_posts()){
						
        ?> 
             <div class="col-md-4">
					<div class="list-group" id="<?php echo strtok($catogary, " "); ?>">
						 <a href="#" class="list-group-item list-group-item-action active border-reset <?php echo $catogary; ?>"> <?php echo $catogary; ?> </a>
						<?php
						$i=1;
						 while ($list_query->have_posts()&& $i<13):
							$list_query->the_post(); 
							 ?>
							<div class="card-header bg-dark">
								 <a class="card-link" data-toggle="collapse" data-parent="#<?php echo strtok($catogary, " "); ?>" href="#<?php echo strtok($catogary, " ").$i; ?>"><?php the_title(); ?></a>
							</div>
							<div id="<?php echo strtok($catogary, " ").$i; ?>" class="collapse">
								<div class="card-body bg-dark">
									<a href="<?php the_permalink()?>"><?php the_excerpt(); ?></a>
									<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
	                            </div>
							</div>
						 <?php  $i++; endwhile; ?>	
					       <a href="#" class="list-group-item list-group-item-action active border-reset <?php echo $catogary; ?> justify-content-between">More... 
					       <span class="badge badge-light badge-pill">14</span></a>
					</div>
					
				</div>
						 <?php 
						 }		
    }
} 
			  ?>		
