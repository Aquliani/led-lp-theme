<?php
/**
 * Template name: Home page
 */

get_header(); ?>
    <main data-type="background" data-speed="4">
        <!--        FRONT-->
        <?php require_once "include/front-page/front.inc.php"; ?>

        <!--                CONTACTS-->
        <?php require_once "include/contacts-page/contacts.inc.php"; ?>
        
<!--        BUY-->
        <?php require_once "include/buy-page/buy.inc.php"; ?>

<!--        ABOUT-->
        <?php require_once "include/about-page/about-section.inc.php"; ?>
    </main>
<?php
get_footer();
