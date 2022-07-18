<?php get_header(); ?>
	
			<br>
		<br>
		<?php get_template_part( 'template-parts/alert-carousel-tamplate'); ?>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			
	        <br><br><br>
		
			<div class="row">
			<?php 
			get_template_part( 'template-parts/collapse-list-template' );
			$cat=array('Latest jobs','Admit card','Results');
			custom_list($cat);
			?>
				
			</div>
		    <br><br><br>
			<div class="row">
			<?php 
			
			$cat=array('Exam Notices','Admit cards','Result');
			custom_list($cat);
			?>
			</div>

			<div class="row">
		   <?php 
				get_template_part( 'template-parts/carousel-template');
				$carou=array('Images_post','recent-news');
				custom_carosoul($carou,6,3);
				 ?>
				
		  </div>
		  <br><br>
			<div class="row">
			
				<?php 
				get_template_part( 'template-parts/card-template');
				$news=array('news');
				custom_card($news);
				?>
			</div>
			<div class="row">
			  <?php 
				get_template_part( 'template-parts/news-card-A');
				$neww=array('events');
				custom_news($neww);
				 ?>
				 
			</div>
		</div>
		
		<div class="col-md-1">
			
		</div>
	</div>
	

<?php get_footer(); ?>