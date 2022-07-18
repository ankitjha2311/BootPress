<?php 
								if(have_rows('job-profile'));
								$job= new article(get_field('job-title'),get_field('job-discription'));
								$job->draw_item(); ?>