<?php 
function custom_news($array)
{
    foreach ($array as $catogary) {
        $list_query = new WP_Query(array(
                     'category_name' => $catogary
                     ));
                     if ($list_query->have_posts()) {
                        $i=1;
                         while ($list_query->have_posts()&& $i<4) :
		                 $list_query->the_post();
		                 $tempTitle=get_the_title();
		                 $tempExcerpt=get_the_excerpt();
		                 $tempDay=get_the_date('j');
		                 $tempMonth=get_the_date('M');
						 $newsCard= new newsCardA($tempTitle,$tempExcerpt,$tempDay,$tempMonth);
						 $newsCard->newsCardDraw();
                  $i++;
                         endwhile;
                     } wp_reset_postdata();
    }
}?>