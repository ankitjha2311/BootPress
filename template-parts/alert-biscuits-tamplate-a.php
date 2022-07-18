<?php 

class alert_cards
{
    private $title;
    private $msg;
    private $btnTxt;
    public function __construct($title,$msg,$btnTxt1='',$btnTxt2=''){
         $this ->title=$title;
         $this->msg=$msg;
         $this->btnTxt1=$btnTxt1;
         $this->btnTxt2=$btnTxt2;
     }
    public function alert_biscuits()
    {
        ?>

     <div class="card-body py-1">
           <div class="row align-items-center no-gutters p-0">
               <div class="col-12 mr-2 my-0 py-0 text-danger">
                   <h5 ><?php echo $this->title; ?></h5> 
               </div>
               <div class="col-12 mr-2 py-1">
                   <h7 class="text-info"><?php echo $this->msg; ?></h7>
               </div>
               <div class="col-12 py-2">
                   <?php if($this->btnTxt1 !=''){ ?>
               <a href="" type="button" class="btn btn-outline-success float-left"><?php echo $this->btnTxt1; ?></a>
    <?php }  if($this->btnTxt2 !=''){ ?>
               <a href="" type="button" class="btn btn-outline-danger float-right"><?php echo $this->btnTxt2; ?></a>
    <?php } ?>  
            </div>		
         </div>
     </div>
<?php
    }
}
?>