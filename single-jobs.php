<?php get_header(); ?>
<body>
         
		     <div class="row">
			     <div class="col-md-12 tab-reset">
				   			<div class="card-header">
								<h2 class="name-tab"><?php the_title() ?></h2>
							</div>
				     
					  <?php 
							$navContent = array('notification-tab','job-profile');
							$nav_item= array('Notification','Job-Profile');
							$nevigation= new aeonTab($nav_item,$navContent);
							$nevigation->drawTab();
							?>
				
					
					
					
		         </div>
				
       
	         </div>
			 
		 
                              

</body>
<?php get_footer(); ?>
