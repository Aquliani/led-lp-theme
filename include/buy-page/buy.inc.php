<?php
$title_buy = get_field('title_buy');
$buy_stores = get_field('buy_stores');
$buy_details = get_field('buy_details');
?>

<section id="sectionBuy" class="buy">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <header class="sci-fi-title">
                    <h1><?= $title_buy; ?></h1>
                    <hr/>
                </header>
                <!-- /.sci-fi-title -->
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="row">
                            <div class="col-sm-12">
                                <header class="sci-fi-title">
                                    <h4><?= $buy_stores; ?></h4>
                                    <hr/>
                                </header>
                                <!-- /.sci-fi-title -->
                            </div>
                            <!-- /.col-sm-12 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <ul>
                                    <?php $loop = new WP_Query(array(
                                        'post_type' => 'adresses',
                                        'meta-key' => 'position',
                                        'orderby' => 'meta-value',
                                        'order' => 'ASC'
                                    )); ?>
                                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                        <li id="adress-<?= $loop->post->ID; ?>"><span><?php the_title(); ?></span></li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                </ul>
                            </div>
                            <!-- /.col-sm-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-sm-2 -->
                    <div class="col-sm-8">
                        <div id="map"></div>
                    </div>
                    <!-- /.col-sm-8 -->
                    <div class="col-sm-2">
                        <div class="row">
                            <div class="col-sm-12">
                                <header class="sci-fi-title">
                                    <h4><?= $buy_details; ?></h4>
                                    <hr/>
                                </header>
                                <!-- /.sci-fi-title -->
                            </div>
                            <!-- /.col-sm-12 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <?php $loop = new WP_Query(array(
                                'post_type' => 'adresses',
                                'meta-key' => 'position',
                                'orderby' => 'meta-value',
                                'order' => 'ASC'
                            )); ?>
                            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="col-sm-12 details adress-<?= $loop->post->ID; ?>">
                                <?php the_content(); ?>
                            </div>
                            <!-- /.col-sm-12 -->
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-sm-2 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#sectionBuy.buy -->