<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Genspace
 * @since Genspace 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<style>
	#logo {
		font-size: 1em;
		margin: 1.5em 3em;
		display: block;
		float: left;
		width: 209px;
		height: 100px;
		overflow: hidden;
		background: url(<?php bloginfo('template_directory');?>/images/olbp_sprite.png) no-repeat;
		text-indent: -9999px;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css"/>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta charset="UTF-8">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php //wp_head(); ?>
</head>

<body>
	<header id="mainhead" class="solid white clearfix">
		<a href="<?php bloginfo('template_directory');?>/images/olbp_sprite.png"><h1 id="logo" class="green-logo">OpenLab-Blueprint</h1></a>
		<nav id="mainnav">
			<ul>
				<li><a href="../olbp/community.html">Community</a></li>
				<li><a href="../olbp/space.html">Space</a></li>
				<li><a href="../olbp/equipment.html">Equipment</a></li>
				<li><a href="../olbp/nutsandbolts.html">Nuts & Bolts</a></li>
				<li><a href="../olbp/fundraising.html">Fundraising</a></li>
				<li><a href="../olbp/biosafety.html">Biosafety</a></li>
				<li><a href="../olbp/about.html">About</a></li>
			</ul>
		</nav>
	</header>
