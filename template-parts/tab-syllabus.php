<div class="px-4">

<?php $syllabus=get_field('syllabus');

foreach($syllabus as $syllabi){
  ?> <div class="py-2 bg-warning text-center"><h3><?php echo $syllabi->post_title; ?></h3></div>
  <div><?php echo $syllabi->post_content; ?></div>
  <?php    
}


?>

</div>

