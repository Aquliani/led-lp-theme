<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Led-lp
 */

get_header(); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <section class="news-blog">
                        <div class="container-fluid">
                            <?php
                            if (have_posts()) :
                                if (is_home() && !is_front_page()) : ?>
                                    <div class="row">
                                        <div class="ski-fi-title">
                                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                            <hr/>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <?php
                                endif;
                                /* Start the Loop */
                                while (have_posts()) : the_post();
                                    ?>
                                    <div class="row">
                                        <?php
                                        /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                        get_template_part('template-parts/content', get_post_format());
                                        ?>
                                    </div>
                                    <!-- /.row -->
                                    <?php
                                endwhile;
                                the_posts_navigation();
                            else :
                                get_template_part('template-parts/content', 'none');
                            endif; ?>
                        </div>
                        <!-- /.container-fluid -->
                    </section>
                </div>
                <!-- /.col-sm-8 col-sm-offset-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <!-- /.news-blog -->
    </main>
<?php
get_sidebar();
get_footer();
