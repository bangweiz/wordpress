<?php
  $field0 = get_field('field_true_false_button');
  if ($field0){
    $field1 = get_field('field_image1');
    $field2 = get_field('field_image2');
    $field3 = get_field('field_image3');
  }
 // echo "<pre>";
 // print_r($field1);
 // echo "</pre>";
 // die();
  
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $field1['url']?>" class="d-block w-100" alt="<?php echo $field1['alt']?>">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $field2['url']?>" class="d-block w-100" alt="alt="<?php echo $field2['alt']?>">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $field3['url']?>" class="d-block w-100" alt="alt="<?php echo $field3['alt']?>">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
