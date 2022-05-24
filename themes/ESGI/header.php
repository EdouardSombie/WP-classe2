<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	
	<header id="site-header">
		<div class="container">
			<?php 
				// Afficher le menu principal
				if ( has_nav_menu('primary')){
					wp_nav_menu([
							'theme_location' => 'primary',
							'container' => 'nav',
							'container_class' => 'main-nav'
						]);
				}
			?>
		</div>
		

	</header>
