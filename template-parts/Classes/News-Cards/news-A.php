<?php 
class newsCardA
{
    private $title;
    private $msg;
    private $date;
    private $month;
    private $no_Comment;
    private $no_Like;
    private $no_Views;
    public function __construct($title, $msg, $date='', $month='',$no_Comment='',$no_Like='',$no_Views='')
    {
        $this ->title=$title;
        $this->msg=$msg;
        $this->date=$date;
        $this->month=$month;
        $this->no_Comment=$no_Comment;
        $this->no_Like=$no_Like;
        $this->no_Views=$no_Views;
    }
    public function newsCardDraw()
    {
        ?>
    <div class="col-4">
    <figure class="snip1253">
        <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample59.jpg"/></div>
        <figcaption>
          <div class="date">
          <span class="day"><?php echo $this->date; ?></span>
          <span class="month"><?php echo $this->month; ?></span>
          </div>
          <h3><?php echo $this->title; ?></h3>
          <p><?php echo $this->msg; ?></p>
        </figcaption>
        <footer>
          <div class="views"><i class="ion-eye"></i><?php echo $this->no_Views; ?></div>
          <div class="love"><i class="ion-heart"></i><?php echo $this->no_Like; ?></div>
          <div class="comments"><i class="ion-chatboxes"></i><?php echo $this->no_Comment; ?></div>
        </footer>
  </figure>
</div>

<?php
    }
} ?>



