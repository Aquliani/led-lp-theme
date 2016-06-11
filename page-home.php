<?php
/**
 * Template name: Home page
*/

get_header(); ?>

<main>
    <section class="main-page">
        <div class="col-sm-3"></div>
        <!-- /.col-sm-3 -->
        <div class="col-sm-6">
            <section class="led-lights-logo">
                <div class="strokes">
                    <?= file_get_contents(get_bloginfo('template_directory') . '/src/images/LED_lights_logo_strokes.svg') ?>
                </div>
                <!-- /.led-strokes -->
                <div class="logo">
                    <?= file_get_contents(get_bloginfo('template_directory') . '/src/images/LED_lights_logo.svg'); ?>
                </div>
                <!-- /.led-lights -->
            </section>
        </div>
        <!-- /.col-sm-6 -->
        <div class="col-sm-3"></div>
        <!-- /.col-sm-3 -->
    </section>
    <!-- /.main-page -->
</main>

<?php
get_footer();
