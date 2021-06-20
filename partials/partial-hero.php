<?php 
$hero = get_field('hero');
$background_image = $hero['background_image'];
$title = $hero['title'];
$subtitle = $hero['subtitle'];
$icon_id = $hero['icon'];

$subtitle_items = array(
    $hero['subtitle_item_1'],
    $hero['subtitle_item_2'],
    $hero['subtitle_item_3'],
    $hero['subtitle_item_4']
);
?>

<div class="hero" style="background-image: url('<?= $background_image ?>');">
    <div class="hero__container container">

        <?php if($title): ?>
            <div class="hero__title-wrapper" data-aos="fade-left" data-aos-duration="2000">
                <h1 class="hero__title"><?= $title; ?></h1>
            </div>
        <?php endif; ?>

        <div class="hero__bottom">
            <?php if($subtitle): ?>
                <h2 class="hero__subtitle"><?= $subtitle ?></h2>
            <?php endif; ?>

            <div class="hero__bottom-items">
                <?php foreach($subtitle_items as $item): ?>
                    <a href="#" class="hero__bottom-item"><?= $item; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php if($icon_id): 
            $icon_src = wp_get_attachment_image_src($icon_id)[0];
            $icon_alt = get_post_meta( $icon_id, '_wp_attachment_image_alt', true );
            ?>
            <img class="hero__icon" src="<?= $icon_src ?>" alt="<?= $icon_alt ?>">
        <?php endif; ?>
    </div>
</div>
