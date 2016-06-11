<?php
/**
 * Template name: Home page
 */

get_header(); ?>
    <main>
        <section class="main-page">
            <?php
            $mainMenu = wp_get_nav_menu_items('main menu');
            ?>
            <div class="container">
                <!--                FIRST ROW - SOCIAL - LOGO - BUY-->
                <div class="row">
                    <div class="col-sm-3"></div>
                    <!-- /.col-sm-3 -->
                    <div class="col-sm-6">
                        <section class="led-lights-logo">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="strokes">
                                        <?= file_get_contents(get_bloginfo('template_directory') . '/src/images/LED_lights_logo_strokes.svg') ?>
                                    </div>
                                    <!-- /.led-strokes -->
                                    <div class="logo">
                                        <?= file_get_contents(get_bloginfo('template_directory') . '/src/images/LED_lights_logo.svg'); ?>
                                    </div>
                                    <!-- /.led-lights -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-3"></div>
                    <!-- /.col-sm-3 -->
                </div>
                <!-- /.row -->

                <!--                SECOND ROW - ABOUT - NEWS BLOG - CONTACTS-->
                <div class="row">
                    <div class="col-sm-3"></div>
                    <!-- /.col-sm-3 -->
                    <div class="col-sm-6">
                        <section class="news-blog-logo">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="news-blog">
                                            <a href="<?= $mainMenu[1]->url; ?>">New New New New New New New New New New New New</a>
                                        </div>
                                        <!-- /.news-blog -->
                                    </div>
                                    <!-- /.col-sm-12 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.news-blog-logo -->
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-3"></div>
                    <!-- /.col-sm-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.main-page -->
    </main>

<?php
get_footer();
