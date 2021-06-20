<?php 
$banner = get_field('banner');
$background_image = $banner['background_image'];
$text = $banner['text'];
?>
<div class="banner">
    <h5 class="banner__text"><?= $text ?></h5>
    <div class="banner__image rellax" style="background-image: url(<?= $background_image ?>);" data-rellax-speed="2"></div>
</div>