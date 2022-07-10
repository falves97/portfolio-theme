<!doctype html>
<html lang="pt-BR">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	} ?>
	<?php wp_head(); ?>
</head>
<body>

<header class="fbalves-header-container">
    <div class="fbalves-logo-container">
		<?php the_custom_logo(); ?>

        <div class="fbalves-btn-menu">
            <div class="fbalves-btn-menu__bars"></div>
        </div>
    </div>

	<?php wp_nav_menu( array( "menu" => "menu-navegacao" ) ); ?>

</header>



