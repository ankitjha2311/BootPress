<?php get_header(); ?>

<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <?php while(have_posts()):the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
  
<?php endwhile; ?>


    </div>
    <div class="col-1"></div>
</div>


<?php get_footer(); ?>