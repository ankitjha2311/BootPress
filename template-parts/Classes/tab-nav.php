<?php class tab_nav{ 
    private $items;
    public function __construct($items){
        $this->items=$items;
    }
    public function get_tab_nav(){ ?>
<ul class="nav nav-pills justify-content-left nav-justified tac-nav-custom">
    <?php $i=1; foreach($this->items as $item) { 
        
        ?>
	<li class="nav-item tab-item-custom">
        <a class="nav-link  <?php if($i==1) echo "active"; else ""; ?> show link-custom" href="#tab-<?php echo $i; ?>" data-toggle="tab">
            <?php echo $item; ?> 
        </a>
	</li>
         <?php $i++; }?> 
 </ul>
 <?php  } } ?>