<?php


$getImageUrlArray = Page::image_fields();
//echo "<pre>";
//print_r($getArray);
//echo "</pre>";
//die();

?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
        for ($i = 0; $i < 3; $i++) {
            if ($i == 0) {
                ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>" class="active"></li>
                <?php
            } else {
                ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>"></li>
                <?php
            }
        }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php
        foreach ($getImageUrlArray as $key => $value) {
            if ($key == 'image1') {
                ?>
                <div class="carousel-item active">
                    <img src="<?php echo $value ?>" class="d-block w-100" alt="">
                </div>
                <?php
            } else {
                ?>
                <div class="carousel-item ">
                    <img src="<?php echo $value ?>" class="d-block w-100" alt="">
                </div>
                <?php
            }
        }
        ?>
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