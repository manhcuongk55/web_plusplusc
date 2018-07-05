<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @package Theme-Vision
 * @subpackage Agama
 * @since Agama 1.0
 */

// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

	<section id="primary" class="site-content <?php echo Agama::bs_class(); ?>">

		<?php if( get_theme_mod('agama_blog_layout', 'list') == 'grid' ): ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'agama' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header>
		<?php endif; ?>

		<div id="content" role="main"<?php Agama_Helper::get_blog_isotope_class(); ?>>

		<?php if ( have_posts() ) : ?>

			<?php if( get_theme_mod('agama_blog_layout', 'list') != 'grid' ): ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'agama' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header>
			<?php endif; ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

		else:
            get_template_part( 'content', 'none' );
		endif; ?>

		</div>

        <?php agama_content_nav( 'nav-below' ); ?>
        <?php Agama_Helper::get_infinite_scroll_load_more_btn(); ?>

	</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
