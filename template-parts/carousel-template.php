<?php
function custom_carosoul($array, int $Card_size, int $y)
{
    foreach ($array as $poster) {
        $caro_query = new WP_Query(array(
            'category_name' => $poster
        ));
        if ($caro_query->have_posts()) {
            ?>
    <div class="col-md-<?php echo $Card_size; ?>">
        <div id="carou<?php echo $poster; ?>" class="carousel slide" data-ride="carousel">



                    <ol class="carousel-indicators">
                        <?php $x = 0;
                        while ($x < $y) { ?>
                    <li data-target="#carou<?php echo $poster; ?>" data-slide-to="<?php echo $x; ?>" class="<?php if ($x === 1) {echo 'active';} else {echo '';}?>"></li>
                    <?php  if($x === 2) {?> </ol>  
                    <?php } $x++;}?>

                    <div class="carousel-inner" style="max-height:250px;">

                    <?php $z = 0; while ($caro_query->have_posts() && $z < $y):
                            $caro_query->the_post();
                            ?>
                           
                                <div class="carousel-item <?php if ($z == 0) {echo 'active';} else {echo ' ';}?>">
                                <img class="d-block w-100" src="<?php the_post_thumbnail();?>">
                                <div class="carousel-caption">
                                <h5> <?php the_title();?></h5>
                                <p> <?php the_content();?> </p>
                                </div>
                               </div>
                            
                    <?php $z++;endwhile;?>
                    </div>




                        <?php $controls = array('next', 'prev');
                        foreach ($controls as $controller) {?>
                        <a class="carousel-control-<?php echo $controller; ?>" href="#carou<?php echo $poster; ?>" role="button" data-slide="<?php echo $controller; ?>">
                            <span class="carousel-control-<?php echo $controller; ?>-icon" aria-hidden="true"></span>
                            <span class="sr-only"><?php echo $controller; ?></span>
                        </a>
                                <?php }?>

        </div>
    </div>
                        
<?php }}
}?>