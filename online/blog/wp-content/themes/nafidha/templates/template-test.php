<?php
/**
 * Template Name: Test Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$page = "blog";
$rootFilePath = $_SERVER['DOCUMENT_ROOT']."/homeproject/nafidha_web/online/";
$rootWebPath = "http://".$_SERVER['HTTP_HOST']."/homeproject/nafidha_web/online/";
include $rootFilePath."controllers/common.inc.php";

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-cover' );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
