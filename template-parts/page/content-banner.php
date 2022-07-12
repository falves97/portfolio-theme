<?php
$id = get_theme_mod('fbalves-banner-control');
$title = get_theme_mod('fbalves-banner-title');
$desc = get_theme_mod('fbalves-banner-text');
$attachment = wp_get_attachment_image($id, 'large', attr: array( "class" => "fbalves-banner-container__img" ));
?>

<section class="fbalves-banner-container">
    <div class="fbalves-banner-container__img-container">
        <?= $attachment ?>
    </div>
    <div class="fbalves-banner-container__desc-area">
        <h1><?= $title ?></h1>
        <h2 class="fbalves-banner-container__categories">Categorias</h2>
        <p><?= $desc ?></p>
        <a href="#" class="fbalves-btn fbalves-btn-primary">Vamos conversar</a>
    </div>
</section>