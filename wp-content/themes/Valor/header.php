<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'web2feel' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/flexslider.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300' rel='stylesheet' type='text/css'>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php 
	wp_enqueue_script('jquery');
	wp_enqueue_script('custom', get_stylesheet_directory_uri() .'/js/custom.js');
	wp_enqueue_script('superfish', get_stylesheet_directory_uri() .'/js/superfish.js'); 
	wp_enqueue_script('flexslider', get_stylesheet_directory_uri() .'/js/jquery.flexslider-min.js'); 
	wp_enqueue_script('carousel', get_stylesheet_directory_uri() .'/js/jquery.carouFredSel-5.5.0.js'); 
?>




<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">  <!-- wrapper begin -->

<div id="masthead"><!-- masthead begin -->
	<div id="top" class="clearfix"> 
		<div class="blogname">	
				
			<?php if (of_get_option('w2f_logo')== "1") { ?>
					 <a class="logo" href="<?php bloginfo('url'); ?>/"><img src="<?php echo of_get_option('w2f_logopic'); ?>" alt="<?php bloginfo('name');?>" /></a>
				<?php } else { ?>
					<h1 class="logo"><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1>
				<?php } ?>
			
			<h2><?php bloginfo( 'description' ); ?> </h2>
		</div>
		<?php get_search_form( ); ?> 
			
	</div>
	<div id="botmenu">
			<?php wp_nav_menu( array( 'container_id' => 'subnav', 'theme_location' => 'primary','menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>
	</div>
</div><!--end masthead-->

<div id="casing">