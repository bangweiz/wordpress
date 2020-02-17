<?php
$getImageUrlArray = Page::image_fields();
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php for ($i = 0; $i < count($getImageUrlArray); $i++) { ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>" class="<?php echo !$i ? 'active' : '' ?>"></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach ($getImageUrlArray as $key => $value) { ?>
            <div class="carousel-item <?php echo !$key ? 'active' : '' ?>">
                <img src="<?php echo $value[0] ?>" class="d-block w-100" alt="<?php echo $value[1] ?>">
            </div>
        <?php } ?>
    </div>
    <?php
        Page::renderPrevOrNext('next');
        Page::renderPrevOrNext('prev');
    ?>
</div>