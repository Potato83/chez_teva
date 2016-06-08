<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chez_Teva
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Normalize -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/normalize.css">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

<!-- Bootstrap theme -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap-theme.min.css">

<!-- FontAwesome Icons -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/style.css">


<?php wp_head(); ?>
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<header>
	<table class="hours">
		<tr>
				<td>5143 Boulevard D&eacute;carie</td>
				<td>Montr&eacute;al, QC</td>
				<td>H3W 3C2</td>
				<td>514 486 5542</td>
			</tr>
			<tr>
				<td class="hour">L - 9h - 20h</td>
				<td class="hour">M - 9h - 20h</td>
				<td class="hour">M - 9h - 20h</td>
				<td class="hour">J - 9h - 21h</td>
				<td class="hour">V - 9h - 21h</td>
				<td class="hour">S - 9h - 18h</td>
				<td class="hour">D - 10h - 18h</td>
			</tr>
			
			
		</table>
	<span class="lang" id="eng">EN</span>
	<span class="lang" id="fre">FR</span>
</header>
	<div class="site-content">