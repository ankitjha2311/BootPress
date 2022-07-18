<?php 
class article{

   private $title;
   private $content;
   public function __construct($title,$content){
        $this ->title= $title;
        $this->content =$content;
    }
public function draw_item(){
    ?> 
    <div class="card border-success mb-3" >
    <div class="card-header bg-transparent"><?php echo $this->title; ?></div>
    <div class="card-body text-primary p-5">
    <?php echo $this->content; ?>
   </div>
    
  </div><?php
}
}

?>



