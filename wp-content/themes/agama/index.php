<?php
/**
 * The main template file
 *
 * @package Theme-Vision
 * @subpackage Agama
 * @since Agama
 */

        // Do not allow direct access to the file.
        if( ! defined( 'ABSPATH' ) ) {
            exit;
        }
  get_header(); ?>

		<div id="content" role="main"<?php Agama_Helper::get_blog_isotope_class(); ?>
            <div class="title-news">
                TIN PLUSPLUSC
            </div>
             <br>
             <br>
            <div class="row">
                <?php
                $args = array( 'post_type' => 'movies', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                ?>
                <?php while ($loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-md-6">
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="title-news">
                SẢN PHẨM HỌC VIÊN
            </div>
            <br>
            <div class="row">
                <?php
                $args = array( 'post_type' => 'product', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                ?>
                <?php while ($loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-md-6">
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="title-news custorm" style="padding-bottom: 200px">
                CÁC ĐỐI TÁC CỦA PLUSPLUSC
            </div>
		</div>

<?php get_footer(); ?>
