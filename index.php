
<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
	<title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="sticky-menu">
    <!--//TODO: Add header menu here-->
</header>
<?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>