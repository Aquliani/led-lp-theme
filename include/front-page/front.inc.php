<section class="front">
    <?php
    $mainMenu = wp_get_nav_menu_items('main menu');
    ?>
    <div class="container">
        <!--                FIRST ROW - SOCIAL - LOGO - BUY-->
        <div class="row">
            <div class="col-sm-3">
                <?php //require_once "social-circle.inc.php"; ?>
            </div>
            <!-- /.col-sm-3 -->
            <div class="col-sm-6">
                <?php //require_once "led-lights-logo.inc.php"; ?>
            </div>
            <!-- /.col-sm-6 -->
            <div class="col-sm-3">
                <?php require_once "buy-cart.inc.php"; ?>
            </div>
            <!-- /.col-sm-3 -->
        </div>
        <!-- /.row -->

        <!--                SECOND ROW - ABOUT - NEWS BLOG - CONTACTS-->
        <div class="row">
            <div class="col-sm-5">
                <?php //require_once 'about-frame.inc.php'; ?>
            </div>
            <!-- /.col-sm-3 -->
            <div class="col-sm-4">
                <?php //require_once "news-blog.inc.php"; ?>
            </div>
            <!-- /.col-sm-6 -->
            <div class="col-sm-3">
                <?php //require_once "contacts-earth.inc.php"; ?>
            </div>
            <!-- /.col-sm-3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.front -->