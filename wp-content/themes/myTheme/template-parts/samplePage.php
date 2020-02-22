<?php
$getImageUrlArray = Page::image_fields();
$getCardArray = Page::renderCardsGroup();

//echo '<pre>';
//print_r($getImageUrlArray);
//echo '</pre>';
//die(123456);


?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php foreach ($getImageUrlArray as $i => $item) { ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>" class="<?php echo !$i ? 'active' : '' ?>"></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach ($getImageUrlArray as $key => $value) { ?>
            <div class="carousel-item <?php echo !$key ? 'active' : '' ?>">
                <img src="<?php echo $value['url'] ?>" class="d-block w-100" alt="<?php echo $value['alt'] ?>">
            </div>
        <?php } ?>
    </div>
    <?php
        Page::renderPrevOrNext('next');
        Page::renderPrevOrNext('prev');
    ?>
</div>

<div class="container">
    <div class="row">
<?php
foreach ( $getCardArray as $value){
    ?>
<div class="card col-sm" style="width: 18rem;">
    <img src="<?php echo $value['url']?>" class="card-img-top" alt="<?php echo $value['alt']?>">
    <div class="card-body">
        <h5 class="card-title"><?php echo $value['title']?></h5>
        <p class="card-text"><?php echo $value['description']?></p>
        <a href="#" class="btn btn-primary"><?php echo $value['button']?></a>
    </div>
</div>
<?php
}
?>
    </div>
</div>

