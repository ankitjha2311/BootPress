<?php 
function custom_card($array)
{
    foreach ($array as $catogary) {
        $list_query = new WP_Query(array(
                     'category_name' => $catogary
                     ));
                     if ($list_query->have_posts()) {
                        $i=1;
                         while ($list_query->have_posts()&& $i<4) :
        $list_query->the_post();
                          ?>
              <div class="col-md-4">
					<div class="card card-events">
                        <div>
                        <img class="img-fluid" src="<?php the_post_thumbnail();?>
                        </div>
            
						      <div class="card-block bg-dark">
							       <h6 class="card-title">
							       <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                                   </a>
							       </h6>
							       <p class="card-text">
                                   <?php the_excerpt(); ?></p>
                              </div>
							  <div>
                                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a> 
                                <a class="btn btn-primary" href="<?php echo get_home_url()."/category/".$catogary." ";?>"><?php echo $catogary; ?></a> 
                              </div>
						
					</div>
                </div>
                <?php  $i++;
                         endwhile;
                     }
    }
}?>