<?php
$title_about_us = get_field('title_about_us');
$prebody_about_us = get_field('prebody_about_us');
?>
<section class="about" id="sectionAbout">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <header class="sci-fi-title">
                    <h1><?= $title_about_us; ?></h1>
                    <hr/>
                </header>
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-12 text-center">
                <article>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <?= $prebody_about_us; ?>
                            </div>
                            <!-- /.col-sm-12 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <?php $loop = new WP_Query(array(
                                'post_type' => 'about_us',
                                'orderby' => 'rand'));
                            $iterator = 0;
                            function echoingRow($iterator)
                            {
                                $startRow = "<div class='row'>";
                                $endRow = "</div>";
                                switch ($iterator) {
                                    case 0:
                                        echo $startRow;
                                        break;
                                    case 3:
                                        echo $endRow;
                                        echo $startRow;
                                        break;
                                    case 4:
                                        echo $endRow;
                                        echo $startRow;
                                        break;
                                    case 7:
                                        echo $endRow;
                                        break;
                                }
                            }
                            ?>
                            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                <?php echoingRow($iterator) ?>
                                <div class="col-sm-<?= ($iterator == 3) ? "12" : "4"; ?>">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <i class="fa <?php the_field('title_icon'); ?> fa-3x"></i>
                                            <!-- /.fa fa-3x -->
                                        </div>
                                        <!-- /.col-sm-12 -->
                                    </div>
                                    <!-- /.row -->
                                    <header>
                                        <h3><?php the_title(); ?></h3>
                                    </header>
                                    <div><?php the_content(); ?></div>
                                </div>
                                <?php $iterator++; ?>
                            <?php endwhile ?>
                            <?php echoingRow($iterator); ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </article>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.about -->