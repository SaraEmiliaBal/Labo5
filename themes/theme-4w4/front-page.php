<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4W4
 */

get_header();
?>

//////////////////////////////////////////////// 
	FRONT-PAGE.PJP
///////////////////////////////////////////////

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
                the_post();
                $titre = get_the_title();
                

			endwhile;
		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
