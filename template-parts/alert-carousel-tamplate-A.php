
			<div class="row box-alert">
				<div class="col-12">
					<div class="carousel slide" id="alert-slider">
						
						<div class="carousel-inner">
                        <?php 
/* take no 0f post per page as 12 so that 12 alerts can be shown 3 alerts per page and 4 page row*/
$carousel_tamplate = new WP_Query(array(
             'posts_per_page'=> 12
             ));
             if ($carousel_template->have_posts()) {
                $i=1;
                /* for repeating each carousel row 4 times*/
                 while ($carousel_template->have_posts()&& $i<5) :
        $carousel_template->the_post(); ?>
                                
						 <div class="carousel-item <?php if ($i==1) { echo 'active'; } else {echo ''; } ?>">
						
                            <?php
                            /* for repeating 3 times a alert for each carousel row*/	
                            $j=0; while($j<3){ ?> 

                                // Biscuits appers here

                            <?php $j++; } ?>
                           	
                            
                            
                         </div>
                         <?php $i++; endwhile; ?>

					</div>
                        </div> <a class="carousel-control-prev" href="#alert-slider" data-slide="prev"><span class="carousel-control-prev-icon"></span>
                           <span class="sr-only">Previous</span></a>
                            <a class="carousel-control-next" href="#alert-slider" data-slide="next">
                           <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					   </div>
				</div>
				
			</div>
		</div>
	
                            <?php } ?>