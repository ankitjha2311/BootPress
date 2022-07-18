<?php require_once('alert-biscuits-tamplate-a.php');?>
 <div class="row container-fluid">
		
		<div class="col-md-12 box-event">
			<div class="heading-event"><h3>Latest Event Alerts</h3></div>
			
			<div class="row box-alert">
				<div class="col-12">
					<div class="carousel slide" id="alert-slider">
						
						<div class="carousel-inner">
                        <?php 
/* take no 0f post per page as 12 so that 12 alerts can be shown 3 alerts per page and 4 page row*/
$gov_alert_query = new WP_Query(array(
             'posts_per_page'=> 12
			 ));
		
             if ($gov_alert_query->have_posts()) {
				$i=1;
				
                /* for repeating each carousel row 4 times*/
                 while ($gov_alert_query->have_posts()&& $i<5) :
        ?> <div class="carousel-item <?php if ($i==1) { echo 'active'; } else {echo ''; } ?>">
						<?php
                            /* for repeating 3 times a alert for each carousel row*/	
							$j=0; while($j<3){  
								$gov_alert_query->the_post(); ?>
                                 <div class="col-12 col-lg-4 biscuit">
									  <div class="card border-biscuit py-0 ">
									
											 <?php 
											 $title=get_the_title();
											 $excerpt=get_the_excerpt();
											 $biscuit= new alert_cards($title,$excerpt,'Registration','Apply Now');
								             $biscuit->alert_biscuits(); ?>
									      </div>
								     </div>
                            <?php $j++; } ?>
                          </div> <?php  $i++; endwhile; ?>
						 </div>
						</div> 
						<a class="carousel-control-prev" href="#alert-slider" data-slide="prev"><span class="carousel-control-prev-icon"></span>
                         <span class="sr-only">Previous</span></a>
                          <a class="carousel-control-next" href="#alert-slider" data-slide="next">
                        <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div>
				</div>
			</div>
		</div>
		
    </div>
    <?php } ?>