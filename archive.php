<?php get_header(); ?>
<div class="row">
<div class="col-1"></div>
<div class="col-10">
<?php 
				get_template_part( 'template-parts/card_template');
				$event=array('events');
				custom_card($event);
				 ?>
</div>
<div class="col-1"></div>
</div>
<?php get_footer(); ?>