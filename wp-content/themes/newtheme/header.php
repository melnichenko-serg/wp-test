<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="main-header">
    <div class="container">
        <div class="header_content">
            <div class="header-logo">
                <a href="#"><?php the_custom_logo(); ?></a>
            </div>
            <nav role="navigation" class="">
				<?php wp_nav_menu( [
					'theme_location' => 'header_menu',
					'container' => 'ul',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'menu_class' => 'header-navigation',
					'menu_id' => '',
				] ); ?>
            </nav>
    </div>
    </div>
</header>