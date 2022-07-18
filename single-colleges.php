<?php get_header(); ?>

<div class="row">
    <div class="col-1">
    </div>
    <div class="col-10">
          <?php  if(have_posts(  )) :while(have_posts(  )) :the_post(  ); ?> 
          <p> <?php the_title(); ?></p>
        <div class="tabbable" id="tabs-broucher">
		        <ul class="nav nav-tabs">
			        <li class="nav-item"><a class="nav-link active show" href="#tab-1" data-toggle="tab">Academics</a></li> 
                    <li li class="nav-item"><a class="nav-link" href="#tab-2" data-toggle="tab">Programs</a></li>
                    <li li class="nav-item"><a class="nav-link" href="#tab-3" data-toggle="tab">Admission</a></li>
                    <li li class="nav-item"><a class="nav-link" href="#tab-4" data-toggle="tab">Analysis</a></li>
                    <li li class="nav-item"><a class="nav-link" href="#tab-4" data-toggle="tab">Q&A</a></li>
		        </ul>
		    <div class="tab-content">
               <div class="tab-pane active" id="tab-1">
                       <h3><?php the_field('notice-title'); ?></h3>
                       <p><?php the_field('latest-notice-details');?></p>
                        <?php 
                        if(have_rows('important-dates')):?>  
                        <div class="col-md-6">
                     <div class="card text-white bg-danger mb-3">
                     <div class="card-header bg-danger">
                      Important Dates
                     </div>
                     <div class="card-body"><ul>
                       <?php while(have_rows('important-dates')): the_row(); ?>
                        <li> <?php the_sub_field('notice-event'); echo ":"; the_sub_field('notice-date'); ?></li><br>
                       <?php endwhile; ?>
                        </ul>
                     </div>
                     </div>
                        </div>    
                        <?php endif;?>
                     </div>
                      <div class="tab-pane fade" id="tab-2">
                      <h3><?php the_field('latest-notice'); ?></h3>
                      <p><?php the_field('general-details'); ?></p>  
                 </div>
             </div>
            <?php  endwhile;
                     endif; ?>
     </div>
 </div>
    <div class="col-1">
    </div>
</div>

<?php get_footer(); ?>