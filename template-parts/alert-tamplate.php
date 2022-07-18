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
                        
                	<div class="card-block">
							<h5 class="card-title">
							<a href="<?php the_permalink(); ?>"><?php the_field('alert'); ?>
                        </a>
							</h5>
							<p class="card-text">
							<?php the_field('alert-text'); ?></p>
							
						</div>
					</div>
                </div>
                <?php  $i++;
                         endwhile;
                     }
    }
}?>