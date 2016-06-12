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
                    <div class="col-sm-3">
                        <?php require_once "include/front-page/social-circle.inc.php"; ?>
                    </div>
                    <!-- /.col-sm-3 -->
                    <div class="col-sm-6">
                        <?php require_once "include/front-page/led-lights-logo.inc.php"; ?>
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-3">
                        <?php require_once "include/front-page/buy-cart.inc.php"; ?>
                    </div>
                    <!-- /.col-sm-3 -->
                </div>
                <!-- /.row -->

                <!--                SECOND ROW - ABOUT - NEWS BLOG - CONTACTS-->
                <div class="row">
                    <div class="col-sm-5">
                        <?php require_once 'include/front-page/about-frame.inc.php'; ?>
                    </div>
                    <!-- /.col-sm-3 -->
                    <div class="col-sm-4">
                        <?php require_once "include/front-page/news-blog.inc.php"; ?>
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-3">
                        <?php require_once "include/front-page/contacts-earth.inc.php"; ?>
                    </div>
                    <!-- /.col-sm-3 -->
                </div>
                <!-- /.row -->
                
<!--                ABOUT US SECTION-->
                <dvi class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <?php require_once "include/about-page/about-section.inc.php"; ?>
                    </div>
                    <!-- /.col-sm-8 col-sm-2 -->
                </dvi>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.main-page -->
    </main>

<?php
get_footer();
