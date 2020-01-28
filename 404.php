
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hashtag
 */

?>

<head>
<style>
body{
	background-color: black;
}
.site-header{
	font-size: x-large;
	font-wieght: bold;
}
h1,p { 
	color: white;
}
.page-content{
	padding-top: 100px;
	padding-bottom: 250px;	
	padding-left: 30%;
	text-align: center;
}
.page-title{
	text-align: center;
	padding-left: 30%;
}

.image {
    position: relative;
    top: 10%;
    left: 10%;
    margin:-60px 0 0 -60px;
}
</style>
</head>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Error Message: 404', 'hashtag' ); ?></h1>
				</header><!-- .page-header -->
				
				<div class="page-content">
				<img class="image" src= "/epiper67/wordpress/wp-content/themes/wordpress-theme/assets/spaget">

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();