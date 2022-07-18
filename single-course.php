<?php get_header(); ?>
<body>
         <div class="container-fluid">
		     <div class="row">
			     <div class="col-md-12 tab-reset">
				   			<div class="card-header">
								<h2 class="name-tab"><?php the_title() ?></h2>
							</div>
				      <div class="tabbable" id="tabs-course">
							<?php 
							$nav_item= array('Notification','Job-Profile','Syllabus','Cut-off Analysis');
							$nevigation= new tab_nav($nav_item);
							$nevigation->get_tab_nav();
							?>
					      <div class="tab-content">
							  <div class="tab-pane active" id="tab-1">
							   <?php if(have_rows('notice-flex'))	
							   get_template_part( 'template-parts/notification-tab');?>
							  </div> 
							  <div class="tab-pane fade" id="tab-2">
								<?php 
								if(have_rows('job-profile'));
								$job= new article(get_field('job-title'),get_field('job-discription'));
								$job->draw_item(); ?>
							  </div>
							  <div class="tab-pane fade" id="tab-3">
								<?php 	get_template_part( 'template-parts/tab-syllabus'); ?>
							  </div>
							  <div class="tab-pane fade" id="tab-4">
                                <?php if(have_rows('analysis'));
								$job= new article(get_field('analysis_title'),get_field('analysis-desc'));
								$job->draw_item(); ?>
							  </div>
						  </div>
                     </div>
		         </div>
	         </div>
         </div>
   </div>
                              

</body>
<?php get_footer(); ?>
