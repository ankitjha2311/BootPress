<?php class aeonTab{ 
    private $tabNav;
    private $tabTamplate;


//Constructor

    public function __construct($tabNav,$tabTamplate){
        $this->tabNav=$tabNav;
        $this->tabTamplate=$tabTamplate;
    }

    public function getTabNav(){ ?>

   
    <?php $i=1; foreach($this->tabNav as $nav) { ?>
	<li class="nav-item tab-item-custom">
        <a class="nav-link  <?php if($i==1) echo "active"; else ""; ?> show link-custom" href="#tab-<?php echo $i; ?>" data-toggle="tab">
            <?php echo $nav; ?> 
        </a>
	</li>
         <?php $i++; }
    
     $i++; }

    public function getTabContent(){
           $i=1; foreach($this->tabTamplate as $tamplate) { ?>

    		<div class="tab-pane <?php if($i!=1) echo "fade"; else "active"; ?>" id="tab-<?php echo $i; ?>">
    			<?php get_template_part( 'template-parts/'.$tamplate); ?>
    			</div>

    			<?php} 
		                            }

	public function drawTab(){

		?>
		<div class="tabbable" id="tabs-job">
		<ul class="nav nav-pills justify-content-left nav-justified tac-nav-custom fixed-bottom">
			<?php getTabNav(); ?>
		</ul>
		<div class="tab-content">
			<?php getTabNav(); ?>
		</div>
		</div> <?php
	} 
}
}	?>