<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<link rel="stylesheet" type="text/css" href="ie.css" />
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
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
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="/web_templates/CORE/css/plugins.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
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
	wp_enqueue_script("jquery");
	wp_head();
?>
<script src="/web_templates/CORE/js/jquery.js"></script>
<script src="/web_templates/CORE/js/ui.js"></script>
<script src="/web_templates/CORE/js/plugins.js"></script>
<script src="/web_templates/CORE/js/webelements.js"></script>
<script src="/web_templates/CORE/js/scripts.js"></script>
<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "https://adminservices.georgiasouthern.edu/conferences/#./app/index.php?org=3&id=14";
}
//-->
</script>

<!--Google Analytics tracking code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30777104-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script><!-- end tracking code -->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	
		<div id="banner">
		
		<a href="<?php echo get_bloginfo('url');?>"><img src="<?php echo get_bloginfo('url');?>/wordpress/wp-content/themes/stem/images/img_logo2.jpg" width="350" height="120" alt="STEM" id="logo" /></a>
		<img src="<?php echo get_bloginfo('url');?>/wordpress/wp-content/themes/stem/images/banner_corner.png" width="20" height="15" alt="STEM" id="banner_corner" />
		<h6 class="subtitle">GEORGIA SCHOLARSHIP OF STEM TEACHING &amp; LEARNING CONFERENCE</h6>
		
		<div id="callwrap">
			<div id="call_day">FRIDAY</div>
			<div id="call_dates">MARCH 8, 2013</div>	
								
			<!--<div id="btn_calltoaction"><a href="http://stem.georgiasouthern.edu/register">REGISTER NOW</a>
			</div>
			<div id="btn_calltoaction2"><a href="http://stem.georgiasouthern.edu/proposals">PROPOSAL SUBMISSION</a>
			</div>-->
			<div id="ugalogowrap">
				<img src="<?php echo get_bloginfo('url');?>/wordpress/wp-content/themes/stem/images/img_UGA.png" alt="STEM" id="ugalogo" />
				<p class="UGA-Text">Board of Regents of the University System of Georgia</p>
			</div>
			
		</div>
				<img src="<?php echo get_bloginfo('url');?>/wordpress/wp-content/themes/stem/images/gs_logo.png" alt="Georgia Southern University" width="175" id="gs_logo" />
				
		</div>	

			
			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->



	<div id="main">