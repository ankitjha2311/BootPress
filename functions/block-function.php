<?php  // CFT Custom Blocks **************************************************************************************
function register_cft_block_types() {

   // register a testimonial GBblock.
   cft_register_block_type(array(
      'name'              => 'testimonial',
      'title'             => __('Testim'),
      'description'       => __('A custom testimonial block.'),
      'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'testimonial', 'quote' ),
   ));
  
   // register another GBblock






}

// Check if function exists and hook into setup.
if( function_exists('cft_register_block_type') ) {
   add_action('cft/init', 'register_cft_block_types');
}
?>