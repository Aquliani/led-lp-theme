<?php
$title_about_us_frame = get_field('title_about_us_frame');
?>

<section class="about-frame">
    <a class="smooth" href="#sectionAbout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <div class="col-sm-5 col-sm-push-7">
                            <div class="row">
                                <header class="sci-fi-title">
                                    <h2><?= $title_about_us_frame; ?></h2>
                                    <hr/>
                                </header>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <i class="fa fa-area-chart pull-left"></i>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-1"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 95%">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <div class="row">
                                        <i class="fa fa-child pull-left"></i>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-2"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 85%">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <div class="row">
                                        <i class="fa fa-industry pull-left"></i>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-3"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 90%">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-sm-12 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.col-sm-6 -->
                        <div class="col-sm-7 col-sm-pull-5">
                            <article>
                                <video src="<?php bloginfo('template_directory') ?>/src/images/about1.mp4"
                                       preload="none" autoplay loop></video>
                                <?= file_get_contents(get_bloginfo('template_directory') . '/src/images/About_frame.svg'); ?>
                            </article>
                        </div>
                        <!-- /.col-sm-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-sm-10 col-sm-offset-1 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </a>
</section>
<!-- /.about-frame -->