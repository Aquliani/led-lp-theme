<?php
$title_social_circle = get_field('title_social_circle');
?>

<section class="social-circle">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <header class="sci-fi-title">
                    <h3><?= $title_social_circle; ?></h3>
                    <hr/>
                </header>
                <!-- /.sci-fi-title -->
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-12">
                <article>
                    <?= file_get_contents(get_bloginfo('template_directory') . '/src/images/Social.svg') ?>
                    <a href="http://vk.com/shining_led_lights" target="_blank">
                        <div class="social-button social-button-vk">
                            <i class="fa fa-vk fa-2x"></i>
                        </div>
                    </a>
                    <!-- /.social-button -->
                    <a href="http://vk.com/shining_led_lights" target="_blank">
                        <div class="social-button social-button-gp">
                            <i class="fa fa-google-plus fa-2x"></i>
                        </div>
                    </a>
                    <!-- /.social-button -->
                    <a href="https://www.youtube.com/channel/UCkchxYX7UMfmqh1BpsZYQSQ" target="_blank">
                        <div class="social-button social-button-yt">
                            <i class="fa fa-youtube fa-2x"></i>
                        </div>
                        <!-- /.social-button -->
                    </a>
                    <a href="http://vk.com/shining_led_lights" target="_blank">
                        <div class="social-button social-button-fb">
                            <i class="fa fa-facebook fa-2x"></i>
                        </div>
                        <!-- /.social-button -->
                    </a>
                </article>
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.social-circle -->