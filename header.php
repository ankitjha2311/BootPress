<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?> | <?php is_front_page(  ) ? bloginfo( 'description' ): wp_title(''); ?></title>
<?php wp_head(); ?>
  </head>
  <body class="body-custom container-fluid">
<?php  /*get_template_part( 'inc/navigation' );*/
get_template_part( 'template-parts/nav/main-nevigation' ); ?>

