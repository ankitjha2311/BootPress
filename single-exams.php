<?php get_header(); ?>
<body>
	<div class="container-fluid">
		     <div class="row">
			     <div class="col-md-12 tab-reset">
				   			<div class="card-header">
								<h2 class="name-tab"><?php the_title() ?></h2>
							</div>
				          <?php 
							$examNavItem= array('Syllabus','Job','Exam');
							$examTab= array('text/syllabus','text/job','text/exam');
							$examTabs= new aeonTab($examNavItem,$examTab);
							$examTabs->drawTab();
							?>
				</div>
	         </div>
         </div>
</body>
<?php get_footer(); ?>
