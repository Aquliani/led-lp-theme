<?php
$title_led_lights_logo = get_field('title_led_lights_logo');
?>

<section class="led-lights-logo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <article>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h4><?= $title_led_lights_logo; ?></h4>
                            <div class="strokes">
                                <?= file_get_contents(get_bloginfo('template_directory') . '/src/images/LED_lights_logo_strokes.svg') ?>
                            </div>
                            <!-- /.led-strokes -->
                            <div class="logo">
                                <?= file_get_contents(get_bloginfo('template_directory') . '/src/images/LED_lights_logo.svg'); ?>
                            </div>
                            <!-- /.led-lights -->
                        </div>
                        <!-- /.col-sm-8 col-sm-offset-2 -->
                    </div>
                    <!-- /.row -->
                </article>
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>